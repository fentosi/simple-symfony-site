<?php


namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class IndexTest extends WebTestCase
{
    public function testShowIndexPage() {
        $client = static::createClient();

        $client->request('GET', '');

        $response = $client->getResponse();

        $this->assertEquals(200, $response->getStatusCode());
    }
}