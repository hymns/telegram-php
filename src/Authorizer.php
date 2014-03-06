<?php namespace Evdb\TelegramPhp;

use Evdbf\TelegramPhp\Factory\Factory;

class Authorizer {

    protected $api;
    protected $methodFactory;

    public function __construct(TelegramApi $api, Factory $methodFactory)
    {
        $this->api = $api;
        $this->methodFactory = $methodFactory;
    }

    public function sendCode($phoneNumber, $smsType = 0)
    {
        $method = $this->methodFactory->build(
            'auth.sendCode',
            [
                'phone_number' => $phoneNumber,
                'sms_type' => $smsType,
                'api_id' => $this->api->getId(),
                'api_hash' => $this->api->getHash(),
                'lang_code' => $this->api->getClientLanguage()
            ]
        );

        return $this->api->invokeMethod($method);
    }

} 