<?php

namespace App\Repository;

use App\Entity\Product;

interface ProductRepositoryInterface
{
    public function addProduct(Product $product): void;
    public function updateProduct(): void;
    public function deleteProduct(Product $product): void;
}