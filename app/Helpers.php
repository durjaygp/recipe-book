<?php 

use App\Services\ExchangeRatesService;

function convertCurrency(ExchangeRatesService $exchangeRates, $amount)
{
    $fromCurrency = 'ZAR';
    $toCurrency = session('currency');

    $convertedAmount = $exchangeRates->convert($amount, $fromCurrency, $toCurrency);

    return $convertedAmount;
}
