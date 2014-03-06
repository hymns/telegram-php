<?php namespace Evdb\TelegramPhp\Factory;

use Evdb\TelegramPhp\Method;

class MethodFactory implements Factory {

    public function build($methodName, $methodParams)
    {
        return new Method($methodName, $methodParams);
    }

} 