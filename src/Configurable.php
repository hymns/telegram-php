<?php namespace Evdb\TelegramPhp;

interface Configurable {

    public function getDefaults();

    public function getConfig();

    public function getOption($key);

    public function setOption($key, $value);

}