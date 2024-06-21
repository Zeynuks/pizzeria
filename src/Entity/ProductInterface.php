<?php

namespace App\Entity;

interface ProductInterface
{
    public function getId(): ?int;
    public function getType(): ?array;
    public function setType(array $type): static;
    public function getName(): ?string;
    public function setName(string $name): static;
    public function getDescription(): ?string;
    public function setDescription(string $description): static;
    public function getPrice(): ?float;
    public function setPrice(float $price): static;


}