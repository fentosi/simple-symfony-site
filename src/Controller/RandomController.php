<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;


class RandomController
{
    public function number() {
        return new Response($this->getRandomNumber());
    }

    private function getRandomNumber() {
        return random_int(0, 100);
    }
}