<?php

namespace App\JobOffers\Model;

class Offer
{
    private $id;

    private $title;

    private $content;

    private $cities;

    public function __construct(array $offer)
    {
        $this->id = $offer['id'];
        $this->title = $offer['content']['title'];
        $this->content = $offer['content']['content'];
        $this->cities = $offer['cities'];
    }


    public function getId() : ?int
    {
        return $this->id;
    }

    public function getTitle() : string
    {
        return $this->title;
    }

    public function getContent() : string
    {
        return $this->content;
    }

    public function getCities() : array
    {
        return $this->cities;
    }
}