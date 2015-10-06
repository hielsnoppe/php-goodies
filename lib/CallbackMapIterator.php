<?php

namespace NielsHoppe\Goodies;

class CallbackMapIterator implements \OuterIterator {

    private $innerIterator;
    private $callback;

    public function __construct (\Iterator $iterator, callable $callback) {

        $this->innerIterator = $iterator;
        $this->callback = $callback;
    }

    public function rewind () {

        $this->innerIterator->rewind();
    }

    public function valid () {

        return $this->innerIterator->valid();
    }

    public function key () {

        return $this->innerIterator->key();
    }

    public function current () {

        return call_user_func($this->callback, $this->innerIterator->current());
    }

    public function next () {

        $this->innerIterator->next();
    }

    public function getInnerIterator () {

        return $this->innerIterator;
    }
}
