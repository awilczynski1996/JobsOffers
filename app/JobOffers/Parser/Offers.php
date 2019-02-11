<?php

namespace App\JobOffers\Parser;

use App\JobOffers\Model\Offer;

class Offers
{
    public function parse(array $data)
    {
        $offers = collect();

        foreach($data as $offer) {
            $offers->push(new Offer($offer));
        }

        return $offers;
    }
}