<?php namespace Evdb\TelegramPhp;

use Closure;
use Guzzle\Http\Client;

class TelegramApi implements Configurable {

    use Traits\Configurable;

    public function __construct(Client $client, array $options = [])
    {
        $this->client = $client;
        $this->config = array_merge($this->getDefaults(), $options);
    }

    public function invoke(Method $method, Closure $callback = null)
    {
        if(!is_null($callback)) {
            $callback();
        }
    }

    /**
     * Retrieve API ID
     */
    public function getId()
    {

    }

    /**
     * Retrieve API Hash
     */
    public function getHash()
    {

    }

    /**
     * Get client language
     */
    public function getClientLanguage()
    {

    }

}