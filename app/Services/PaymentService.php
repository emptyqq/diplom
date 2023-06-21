<?php

namespace App\Services;

use YooKassa\Client;

class PaymentService
{

    public function getClient(): Client
    {
        $client = new Client();
        $client->setAuth(config('services.yookassa.shop_id'), config('services.yookassa.secret_key'));

        return $client;
    }

    public function createPayment(float $price, string $description, array $options)
    {
        $client = $this->getClient();
        $payment = $client->createPayment([
            'amount' => [
                'value' => $price,
                'currency' => 'RUB'
            ],
            'confirmation' => [
                'type' => 'redirect',
                'return_url' => route('core.payment.follow', ['user' => $options['user'], 'months' => $options['months']]),
            ],
            'capture' => false,
            'metadata' => [
                'user' => $options['user'],
            ],
            'description' => $description,

        ], uniqid('', true));

        return $payment->getConfirmation()->getConfirmationUrl();
    }
}
