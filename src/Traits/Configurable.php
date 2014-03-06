<?php namespace Evdb\TelegramPhp\Traits;


trait Configurable {

    protected $defaults = [];
    protected $config = [];

    public function getDefaults()
    {
        return $this->defaults;
    }

    public function getConfig()
    {
        return $this->config;
    }

    public function getOption($key, $defaultValue = null)
    {
        if(isset($this->config[$key])) {
            return $this->config[$key];
        }
        return $defaultValue;
    }

    public function setOption($key, $value)
    {
        $this->config[$key] = $value;
        return $this;
    }

} 