<?php

namespace NielsHoppe\Goodies;

/**
 * Shamelessly copied from
 * @see http://forums.phpfreaks.com/topic/274397-xmlreader-xpath/
 */

class XMLReader extends \XMLReader {

    /**
    * depth of the previous node
    *
    * @var int
    */

    protected $_previousDepth = 0;

    /**
     * list of the parsed nodes
     *
     * @var array
     */

    protected $_nodesParsed = array();

    /**
     * keep track of the node types
     *
     * @var array
     */

    protected $_nodesType = array();

    /**
     * keeps track of the node number
     *
     * @var array
     */

    protected $_nodesCount = array();

    /**
     * list of nodes that matter for XPath
     *
     * @var array
     */

    protected $_referencedNodeTypes = array(
        parent::ELEMENT,
        parent::ATTRIBUTE,
        parent::TEXT,
        parent::CDATA,
        parent::COMMENT
    );

    /**
     * keep track of all the parsed paths
     *
     * @var array
     */

    protected $_parsedPaths = array();

    /**
     * Move to next node in document
     *
     * @throws XMLReaderException
     * @link http://php.net/manual/en/xmlreader.read.php
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */

    public function read () {

        $read = parent::read();

        if (in_array($this->nodeType, $this->_referencedNodeTypes)) {

            if ($this->depth < $this->_previousDepth) {

                if (!isset($this->_nodesParsed[$this->depth])) {

                    throw new \Exception('Missing items in $_nodesParsed');
                }

                if (!isset($this->_nodesCount[$this->depth])) {

                    throw new \Exception('Missing items in $_nodesCounter');
                }

                if (!isset($this->_nodesType[$this->depth])) {

                    throw new \Exception('Missing items in $_nodesType');
                }

                $this->_nodesParsed	 = array_slice($this->_nodesParsed, 0, $this->depth + 1, true);
                $this->_nodesCount = array_slice($this->_nodesCount, 0, $this->depth + 1, true);
                $this->_nodesType	 = array_slice($this->_nodesType, 0, $this->depth + 1, true);
            }

            if (
                isset($this->_nodesParsed[$this->depth]) &&
                $this->localName == $this->_nodesParsed[$this->depth] &&
                $this->nodeType == $this->_nodesType[$this->depth]
            ) {
                $this->_nodesCount[$this->depth] = $this->_nodesCount[$this->depth] + 1;
            }
            else {

                $this->_nodesParsed[$this->depth] = $this->localName;
                $this->_nodesType[$this->depth]	 = $this->nodeType;

                $logPath = $this->_getLogPath();

                if (isset($this->_parsedPaths[$logPath])) {

                    $this->_nodesCount[$this->depth] = $this->_parsedPaths[$logPath] + 1;
                }
                else {

                    $this->_nodesCount[$this->depth] = 1; // first node is 1, not 0
                }
            }

            if ($this->nodeType == parent::ELEMENT) {

                $this->_parsedPaths[$this->_getLogPath()] = $this->_nodesCount[$this->depth];
            }

            $this->_previousDepth = $this->depth;
        }

        return $read;
    }

    /**
     * getNodePath()
     *
     * @return string XPath of the current node
     */

    public function getNodePath () {

        if (
            count($this->_nodesCount) != count($this->_nodesParsed) &&
            count($this->_nodesCount) != count($this->_nodesType)
        ) {

            throw new \Exception('Counts do not match');
        }

        $nodePath = '';

        foreach ($this->_nodesParsed as $depth => $nodeName) {

            switch ($this->_nodesType[$depth]) {

            case parent::ELEMENT:
                $nodePath .= '/' . $nodeName . '[' . $this->_nodesCount[$depth] . ']';
                break;

            case parent::ATTRIBUTE:
                $nodePath .= '[@' . $nodeName . ']';
                break;
            case parent::TEXT:
            case parent::CDATA:
                $nodePath .= '/text()';
                break;
            case parent::COMMENT:
                $nodePath .= '/comment()';
                break;
            default:
                throw new \Exception('Unknown node type');
                break;
            }
        }

        return $nodePath;
    }

    /**
     * get the path of the actual node for logging
     *
     * @return string
     */

    protected function _getLogPath () {

        $path = '';

        $localCopy = $this->_nodesParsed;

        if (isset($localCopy[$this->depth])) {

            unset($localCopy[$this->depth]);
        }

        foreach ($localCopy as $depth => $nodeName) {

            $path .= '/' . $nodeName . '[' . $this->_nodesCount[$depth] . ']';
        }

        $path .= '/' . $this->localName;

        return $path;
    }
}
