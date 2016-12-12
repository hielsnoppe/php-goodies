<?php

namespace NielsHoppe\JSON\Traits;

trait StringTrait {

    /**
     * @var string
     */
    private $value;

    /**
     * Returns the value of this
     * @return string
     */
    public function get () {

        return $this->value;
    }

    /**
     * Compares the value of this with another string value
     * @param string $value
     * @return string
     */
    public function is ($value) {

        return $this->value === strval($value);
    }

    /**
     * Sets the value of this to the given string value
     * @param string $value
     */
    public function set ($value) {

        $this->value = strval($value);
    }

    /**
     * @return string
     */
    public function jsonSerialize () {

        return $this->get();
    }
}
