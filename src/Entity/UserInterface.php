<?php

namespace App\Entity;

interface UserInterface
{
    public function getId(): ?int;
    public function getFirstName(): ?string;
    public function setFirstName(string $firstName): static;
    public function getLastName(): ?string;
    public function setLastName(string $lastName): static;
    public function getAddress(): ?string;
    public function setAddress(string $address): static;
    public function getMiddleName(): ?string;
    public function setMiddleName(string $middleName): static;
    public function getBirthDate(): ?\DateTimeInterface;
    public function setBirthDate(\DateTimeInterface $birthDate): static;
    public function getEmail(): ?string;
    public function setEmail(string $email): static;
    public function getPhone(): ?string;
    public function setPhone(string $phone): static;
    public function getAvatar(): ?string;
    public function setAvatar(string $avatar): static;
    public function getPassword(): ?string;
    public function setPassword(string $password): static;

}