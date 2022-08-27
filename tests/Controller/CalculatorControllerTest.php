<?php

namespace App\Tests\Controller;

use App\Tests\ServiceTestCase;
use Symfony\Bundle\FrameworkBundle\Routing\Router;

class CalculatorControllerTest extends AbstractControllerTest
{
    public function test_add()
    {
        //Given
        $this->client->request('GET', '/api/calculator/add/15.4/43');

        //When
        $response = $this->client->getResponse();
        $responseData = json_decode($response->getContent(), true);

        //Then
        $this->assertResponseIsSuccessful();
        $this->assertJson($responseData);
        $this->assertSame(200, $response->getStatusCode());
        $this->assertSame(58.4, $responseData);
    }

    public function test_subtract()
    {
        //Given
        $this->client->request('GET', '/api/calculator/subtract/115.4/43');

        //When
        $response = $this->client->getResponse();
        $responseData = json_decode($response->getContent(), true);

        //Then
        $this->assertResponseIsSuccessful();
        $this->assertJson($responseData);
        $this->assertSame(200, $response->getStatusCode());
        $this->assertSame(72.4, $responseData);
    }

    public function test_multiply()
    {
        //Given
        $this->client->request('GET', '/api/calculator/multiply/115.4/43');

        //When
        $response = $this->client->getResponse();
        $responseData = json_decode($response->getContent(), true);

        //Then
        $this->assertResponseIsSuccessful();
        $this->assertJson($responseData);
        $this->assertSame(200, $response->getStatusCode());
        $this->assertSame(4962.2, $responseData);
    }

    public function test_divide()
    {
        //Given
        $this->client->request('GET', '/api/calculator/divide/115.4/43');

        //When
        $response = $this->client->getResponse();
        $responseData = json_decode($response->getContent(), true);

        //Then
        $this->assertResponseIsSuccessful();
        $this->assertJson($responseData);
        $this->assertSame(200, $response->getStatusCode());
        $this->assertSame(2.68372093, $responseData);
    }
}