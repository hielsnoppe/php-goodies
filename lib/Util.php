<?php

namespace NielsHoppe\Goodies;

class Util {

    static function toCamelCase ($slugString) {

        return lcfirst(implode(array_map('ucfirst', explode('-', $slugString))));
    }

    static function array_filter_recursive ($array) {

        $result = array_map(function ($value) {

            if (is_array($value)) {

                return self::array_filter_recursive($value);
            }
            else return $value;

        }, $array);

        $result = array_filter($result);

        return $result;
    }
}
