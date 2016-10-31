<?php

namespace NielsHoppe\Goodies\JsonSchema\Examples;

class ExampleObject implements \NielsHoppe\Goodies\JsonSchema\Types\JsonObject {

    use \NielsHoppe\Goodies\JsonSchema\Traits\ObjectTrait;

    /**
     * @var ExampleString
     */
    protected $name;

    /**
     * @var ExampleInteger
     */
    protected $answer;

    /**
     * @var ExampleNumber
     */
    protected $pi;

    /**
     * @var ExampleBoolean
     */
    protected $isExample;

    /**
     * @var ExampleList
     */
    protected $ducks;

    public function __construct () {

        $this->name = new ExampleString('Example');
        $this->answer = new ExampleInteger(42);
        $this->pi = new ExampleNumber(3.1415);
        $this->isExample = new ExampleBoolean(true);
        $this->ducks = new ExampleList(array('Huey', 'Dewey', 'Louie'));
    }
}
