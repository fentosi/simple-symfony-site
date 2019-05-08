<?php


namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RandomTest extends WebTestCase
{
    public function testShowShowRandomNumber() {
        $client = static::createClient();

        $client->request('GET', 'random/number');

        $response = $client->getResponse();

        $this->assertEquals(200, $response->getStatusCode());
    }
}