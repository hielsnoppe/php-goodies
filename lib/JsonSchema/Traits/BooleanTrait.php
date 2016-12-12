<?php

namespace NielsHoppe\JSON\Traits;

trait BooleanTrait {

    /**
     * @var bool
     */
    private $value;

    /**
     * Returns the value of this
     * @return bool
     */
    public function get () {

        return $this->value;
    }

    /**
     * Compares the value of this with another boolean value
     * @param bool $value
     * @return bool
     */
    public function is ($value) {

        return $this->value === boolval($value);
    }

    /**
     * Sets the value of this to the given boolean value
     * @param bool $value
     */
    public function set ($value) {

        $this->value = boolval($value);
    }

    /**
     * @return bool
     */
    public function jsonSerialize () {

        return $this->get();
    }
}
