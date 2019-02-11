<?php

namespace App\JobOffers\Api;

use App\JobOffers\Parser\Offers;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Cache;

class AppManagerApi implements OffersApiInterface
{
    private $client;
    private $api_url;

    public function __construct(Client $client)
    {
        $this->client = $client;
        $this->api_url = config('appmanager.api_url') . config('appmanager.api_version');
    }

    public function request(string $method, string $uri)
    {
        $url = $this->api_url . $uri;

        $response = $this->client->request($method, $url);

        return json_decode($response->getBody(), true);
    }

    public function getAds()
    {
        $response = Cache::remember("ads", 30, function () {
            return $this->request('GET', '/ads');
        });

        if ($response === null) {
            return [];
        }

        return (new Offers())->parse($response['data']);
    }
}