<?php

namespace TheiconicInterview\Tests;

use PHPUnit\Framework\TestCase;
use TheiconicInterview\Php\Catalog;

/**
 * Copyright (C) TheIconic - All Rights Reserved
 *
 * This source code is protected under international copyright law.  All rights
 * reserved and protected by the copyright holders.
 * This file is confidential and only available to authorized individuals with the
 * permission of the copyright holders.  If you encounter this file and do not have
 * permission, please contact the copyright holders and delete this file.
 */
class CatalogTest extends TestCase
{
    protected $catalog;

    public function setUp(): void
    {
        $this->catalog = new Catalog();
    }

    /**
     * QUESTION 1: Run the test
     */
    public function testGetProductCorrect()
    {
        $product = $this->catalog->getProduct(1);
        $this->assertNotNull($product);
        $this->assertEquals(1, $product['id']);
        $this->assertEquals('Red t-shirt', $product['name']);
    }

    /**
     * QUESTION 2: Write unit test
     */
    public function testFindProductsByTag()
    {
        // TODO: Implement this test
    }

    /**
     * QUESTION 3: Remove "markTestSkipped" and run the test
     * @dataProvider providerLookForProducts
     */
    public function testLookForProducts(array $tags, array $expected)
    {
        $this->markTestSkipped('Skipping this test for now.');
        $products = $this->catalog->lookForProducts($tags);
        $ids = array_column($products, 'id');

        $this->assertCount($expected['count'], $products);
        $this->assertEquals($expected['ids'], $ids);
    }

    public function providerLookForProducts()
    {
        return [
            'should find matching products' =>  [
                'tag' => ['autumn', 'summer'],
                'expected' => [
                    'count' => 3,
                    'ids' => [1, 2, 3],
                ],
                
            ],
            'should NOT find matching products' => [
                'tag' => ['non-existent'],
                'expected' => [
                    'count' => 0,
                    'ids' => [],
                ],
            ],
        ];
    }
}
