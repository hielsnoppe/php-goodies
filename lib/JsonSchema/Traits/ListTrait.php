<?php

namespace NielsHoppe\JSON\Traits;

trait ListTrait {

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
     * @var mixed[]
     */
    private $items;

    public function push ($item) {

        array_push($this->items, $item);
    }

    public function pop () {

        return array_pop($this->items);
    }

    public function jsonSerialize () {

        return $this->items;
    }
}
