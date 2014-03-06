<?php namespace Evdb\TelegramPhp;


class Method {

    protected $name;
    protected $params;

    public function __construct($name, $params = [])
    {
        $this->name = $name;
        $this->params = $params;
    }

} 