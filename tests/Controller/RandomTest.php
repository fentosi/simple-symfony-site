<?php


namespace App\Tests\Controller;

use PHPUnit\Framework\TestCase;
use App\Controller\RandomController;
use Symfony\Component\HttpFoundation\Response;


class RandomTest extends TestCase
{
    public function testNumberReturnCorrectResponseInstance() {
        $randomController = new RandomController();
        $result = $randomController->number();

        $this->assertInstanceOf(Response::class, $result);
    }
}