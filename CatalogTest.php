<?php
use PHPUnit\Framework\TestCase;
require './Catalog.php';

final class CatalogTest extends TestCase {
    public function testTransformCatalogWithEmptyArray()
    {
        $catalog = new Catalog();
        $inputCatalog = [];
        $expectedCatalog = [];

        $this->assertEquals($expectedCatalog, $catalog->transformCatalog($inputCatalog));
    }
}