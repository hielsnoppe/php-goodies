<?php

namespace NielsHoppe\Goodies\PHPUnit;

trait YamlDataProviderTrait {

    public function yamlDataProvider () {

        $class = str_replace('Nl2Go\\Templates\\', '', static::class);
        $filename = str_replace('\\', DIRECTORY_SEPARATOR, $class);
        $filename = sprintf('tests/%s.yaml', $filename);

        $trace = debug_backtrace(false, 3);
        $method = $trace[2]['args'][2];

        $testdata = yaml_parse(file_get_contents($filename));

        return $testdata['tests'][$method]['dataProvider'];
    }
}
