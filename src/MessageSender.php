<?php namespace Evdb\TelegramPhp;

use Closure;

class MessageSender {

    /**
     * @var TelegramApi
     */
    protected $api;

    public function __construct(TelegramApi $api)
    {
        $this->api = $api;
    }

    public function sendMessage($peerId, $text, Closure $callback = null)
    {
        $this->api->invoke(
            'messages.sendMessage',
            [
                'peer' => $this->resolvePeerById($peerId),
                'text' => $text,
                'random_id' => $this->generateRandomId()
            ],
            $callback
        );
    }

} 