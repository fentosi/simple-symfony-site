<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class RandomController extends AbstractController
{
    public function number() {
        return $this->render('random/number.html.twig', [
            'number' => $this->getRandomNumber(),
        ]);
    }

    private function getRandomNumber() {
        return random_int(0, 100);
    }
}