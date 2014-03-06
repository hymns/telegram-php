<?php namespace Evdb\TelegramPhp;

use Closure;

class MessageSender {

    /**
     * @var TelegramApi
     */
    protected $api;

    public function __construct(TelegramApi $api, Factory $methodFactory)
    {
        $this->api = $api;
        $this->methodFactory = $methodFactory;
    }

    public function sendMessage($peerId, $text, Closure $callback = null)
    {
        $method = $this->methodFactory->build(
            'messages.sendMessage',
            [
                'peer' => $this->resolvePeerById($peerId),
                'text' => $text,
                'random_id' => $this->generateRandomId()
            ]
        );

        $this->api->invoke($method, $callback);
    }

} 