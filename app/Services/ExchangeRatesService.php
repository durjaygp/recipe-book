<?php

namespace App\Services;

use GuzzleHttp\Client;

class ExchangeRatesService
{

    public function convert($amount, $fromCurrency, $toCurrency)
    {
        $client = new Client();
        $response = $client->get("https://open.er-api.com/v6/latest/{$fromCurrency}?apikey=b2580cf79035c9ac45c94732d316fe63");
        $data = json_decode($response->getBody(), true);

        $rate = $data['rates'][$toCurrency] ?? null;

        if ($rate) {
            return $amount * $rate;
        }

        return null;
    }
}
