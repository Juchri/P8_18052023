<?php

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class UserControllerTest extends WebTestCase
{
    private $client;

    protected function setUp(): void
    {
        $this->client = static::createClient();
    }

    public function testHomepage()
    {
        $this->client->request(Request::METHOD_GET, '/login');

        $response = $this->client->getResponse();
        $statusCode = $response->getStatusCode();

        $this->assertSame(Response::HTTP_OK, $statusCode);
    }
}
