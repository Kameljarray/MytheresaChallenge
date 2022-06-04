<?php

namespace App\Tests;

use ApiPlatform\Core\Bridge\Symfony\Bundle\Test\ApiTestCase;
use App\Entity\Product;


class GetProductTest extends ApiTestCase
{

    public function testGetAllProducts(): void
    {


        // The client implements Symfony HttpClient's `HttpClientInterface`, and the response `ResponseInterface`
        $response = static::createClient()->request('GET', '/products?page=1');
        $this->assertResponseIsSuccessful();
        // Asserts that the returned content type is JSON-LD (the default)
        $this->assertResponseHeaderSame('content-type', 'application/ld+json; charset=utf-8');
        // Asserts that the returned JSON is a superset of this one
        $this->assertJsonContains([
            '@context' => '/contexts/Entrypoint',
            '@id' => '/',
            '@type' => 'Entrypoint',
            '@context' => '/contexts/Product',
            '@id' => '/products',
            '@type' => 'hydra:Collection',
            'hydra:member' =>
            array(),
            'hydra:totalItems' => 5,
            'hydra:search' =>
            array(
                '@type' => 'hydra:IriTemplate',
                'hydra:template' => '/products{?category}',
            ),
        ]);
        // Assert that the number of fixtures is correct
        $this->assertCount(5, $response->toArray()['hydra:member']);
    }
    public function testGetSingleProduct(): void
    {


        // The client implements Symfony HttpClient's `HttpClientInterface`, and the response `ResponseInterface`
        $response = static::createClient()->request('GET', '/products/1');
        $this->assertResponseIsSuccessful();
        // Asserts that the returned content type is JSON-LD (the default)
        $this->assertResponseHeaderSame('content-type', 'application/ld+json; charset=utf-8');
        // Asserts that the returned JSON is a superset of this one
        $this->assertJsonContains([
            '@context' => '/contexts/Product',
            '@id' => '/products/1',
            '@type' => 'Product',
            'id' => 1,
            'sku' => '000001',
            'name' => 'BV Lean leather ankle boots',
            'category' => 'boots',
            'price' => array(
                'original' => 89000,
                'final' => 62300,
                'discount_percentage' => '30%',
                'currency' => 'EUR',
            ),
        ]);
    }
}