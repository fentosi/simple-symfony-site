<?php


namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ContactUsTest extends WebTestCase
{
    public function testShowContactUsPage() {
        $client = static::createClient();

        $client->request('GET', 'contact-us');

        $response = $client->getResponse();

        $this->assertEquals(200, $response->getStatusCode());
    }
}