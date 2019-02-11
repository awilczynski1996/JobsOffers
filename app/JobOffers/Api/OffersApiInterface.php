<?php

namespace App\JobOffers\Api;

use GuzzleHttp\Client;

interface OffersApiInterface
{
    public function __construct(Client $client);
    public function request(string $method, string $uri);
    public function getAds();
}