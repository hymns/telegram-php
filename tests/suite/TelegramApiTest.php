<?php

class TelegramApiTest extends PHPUnit_Framework_TestCase {

    protected $instance;

    public function setUp()
    {
        $this->instance = new Evdb\TelegramPhp\TelegramApi(
            new Guzzle\Http\Client()
        );
    }

    public function testClosureCalledOnInvoke()
    {
        $called = false;
        $this->instance->invoke(
            new Evdb\TelegramPhp\Method('test.method'),
            function() use (&$called) {
                $called = true;
            }
        );

        $this->assertTrue($called, 'Callback should be called if not null.');
    }

}