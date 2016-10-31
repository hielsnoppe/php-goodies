<?php

namespace NielsHoppe\Goodies\JsonSchema;

trait TupleTrait {

    /**
     * @var mixed
     */
    protected $itemType;
    /**
     * @var int
     */
    protected $minItems;
    /**
     * @var int
     */
    protected $maxItems;
    /**
     * @var bool
     */
    protected $uniqueItems = false;
    /**
     * @var bool
     */
    protected $additionalItems = true;

    /**
     * @var mixed[]
     */
    private $items;

    public function set ($key, $value) {

        $this->items[$key] = $value;
    }

    public function get ($key) {

        if (array_key_exists($key, $this->items)) {

            return $this->items[$key];
        }

        return null;
    }

    public function jsonSerialize () {

        return $this->items;
    }
}
