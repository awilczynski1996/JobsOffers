<?php

namespace App\Http\Controllers;

use App\JobOffers\Api\OffersApiInterface;

class OffersController
{
    private $api;

    public function __construct(OffersApiInterface $api)
    {
        $this->api = $api;
    }

    public function index()
    {
        $offers = $this->api->getAds();

        return view('site.offers.index', [
            'offers' => $offers
        ]);
    }
}