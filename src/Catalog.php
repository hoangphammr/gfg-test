<?php

namespace TheiconicInterview\Php;

/**
 * Copyright (C) TheIconic - All Rights Reserved
 *
 * This source code is protected under international copyright law.  All rights
 * reserved and protected by the copyright holders.
 * This file is confidential and only available to authorized individuals with the
 * permission of the copyright holders.  If you encounter this file and do not have
 * permission, please contact the copyright holders and delete this file.
 */
class Catalog
{
    private $products = [
        [
            "id" => 1, "name" => "Red t-shirt", "quantity" => 10,
            "tags" => ["summer", "red", "t-shirt", "spring", "men", "casual", "autumn"]
        ],
        [
            "id" => 2, "name" => "Blue shirt", "quantity" => 0,
            "tags" => ["blue", "shirt", "summer", "women", "men"]
        ],
        [
            "id" => 3, "name" => "Short sleeve shirt", "quantity" => 99,
            "tags" => ["shirt", "summer", "short-sleeve"]
        ],
        [
            "id" => 4, "name" => "Mom jeans", "quantity" => 0,
            "tags" => ["jeans", "winter", "women", "pants"]
        ],
        [
            "id" => 5, "name" => "Leather Boots", "quantity" => 50,
            "tags" => ["leather", "boots", "footwear", "men", "spring"]
        ],
        [
            "id" => 6, "name" => "Checked Shirt", "quantity" => 13,
            "tags" => ["checked", "shirt", "casual", "men", "spring"]
        ],
    ];

    public function __construct()
    {
        // $this->products = json_decode(file_get_contents(__DIR__ . '/../_fixtures/products.small.json'), true);
    }

    /**
     * QUESTION 1:
     * - Implement a function to get a product by its ID.
     * - Verify by running the prepared unit test
     */
    public function getProduct($id)
    {
        // TODO: implement me
    }

    /**
     * QUESTION 2:
     *  - Implement a function to find all products having the given tag
     *  - Write Unit tests for this function
     */
    public function findProductsByTag($tag)
    {
        // TODO: implement me
        return [];
    }

    /**
     * QUESTION 3: This function is already implemented but it has a BUG.
     * 
     *  Go Question 3 in the CatalogTest
     *      - remove "markTestSkipped" function and run the Unit test.
     *      - You will find that the Test suite will PASS.
     * 
     *  However, if you switch the products dataset to ./_fixtures/catalog.small.json 
     *      - by uncommenting the line in the "__construct" function on this file, the test suite will FAIL.
     *      - despite the fact the two datasets have the same products, with only differences in orders.
     * 
     * - Explain what this function does
     * - Find and fix the bug
     */
    public function lookForProducts($tags)
    {
        $allProducts = [];
        foreach ($tags as $t) {
            $temp = $this->findProductsByTag($t);

            foreach ($temp as $p) {
                $f = false;

                foreach ($allProducts as $j) {
                    if ($j["id"] === $p["id"]) {
                        $f = true;
                    } else {
                        $f = false;
                    }
                }
                if (!$f) {
                    $allProducts[] = $p;
                }
            }
        }

        return $allProducts;
    }

    /**
     * BONUS 1: Build a new feature
     * 
     * - Write a function to fetch low stock products that matches the given tags
     * - Write Unit tests for this function
     */

    /**
     * BONUS 2: Refactor the entire module for better maintainability
     */

    /**
     * BONUS 3: Build a function to find all groups of products that share "n" tags together
     * 
     * You can find more sample data in '_fixtures' folder
     */

}
