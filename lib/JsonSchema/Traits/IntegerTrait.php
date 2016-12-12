<?php

namespace NielsHoppe\JSON\Traits;

trait IntegerTrait {

    /**
     * @var int
     */
    private $value;

    /**
     * Returns the value of this
     * @return int
     */
    public function get () {

        return $this->value;
    }

    /**
     * Compares the value of this with another integer value
     * @param int $value
     * @return int
     */
    public function is ($value) {

        return $this->value === intval($value);
    }

    /**
     * Sets the value of this to the given boolean value
     * @param int $value
     */
    public function set ($value) {

        $this->value = intval($value);
    }

    /**
     * @return int
     */
    public function jsonSerialize () {

        return $this->get();
    }
}
