<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use CurrencyApi\CurrencyApi\CurrencyApiClient;
use CurrencyConverter;


class CurrencyController extends Controller
{
//    public function currency(){
//        $currencyapi = new \CurrencyApi\CurrencyApi\CurrencyApiClient('cur_live_8D0gBjyuwiwd3sVVDwIimanXRL81ZXGQ7KEsETQ5');
//
//        var_dump($currencyapi->latest([
//            'base_currency' => 'ZAR',
//            'currencies' => 'USD',
//        ]));
//    }

    public function currency($amount, $fromCurrency, $toCurrency) {
        $currencyapi = new \CurrencyApi\CurrencyApi\CurrencyApiClient('cur_live_8D0gBjyuwiwd3sVVDwIimanXRL81ZXGQ7KEsETQ5');

        $response = $currencyapi->latest([
            'base_currency' => $fromCurrency,
            'currencies' => $toCurrency,
        ]);

        if (isset($response['data'][$toCurrency]['value'])) {
            $exchangeRate = $response['data'][$toCurrency]['value'];
            $convertedAmount = $amount * $exchangeRate;

            return view('currency', compact('convertedAmount'));
        } else {
            // Handle the case when the conversion rate is not available.
            return view('currency')->with('message', 'Conversion rate not available');
        }
    }





}
