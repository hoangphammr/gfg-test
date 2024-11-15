<?php

final class Catalog
{
    public function __construct() {}

    public function transformCatalog(array $catalogs): array {
        return $catalogs;
    } 
}

$catalog = new Catalog();
$arr = [
    'a' => 'b',
    'c' => 'd',
];

$transformed = $catalog->transformCatalog($arr);
print_r($transformed);

