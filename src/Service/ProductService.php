<?php

namespace App\Service;
use App\Repository\ProductRepository;
use App\Entity\Product;

class ProductService
{
    private $productRepository;
    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }
    public function newProduct(Product $product): void
    {
        $this->productRepository->addProduct($product);
    }
    public function updateProduct(): void
    {
        $this->productRepository->updateProduct();
    }

    public function deleteProduct(Product $product): void
    {
        $this->productRepository->deleteProduct($product);
    }
}