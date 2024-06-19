<?php

namespace App\Repository;

use App\Entity\User;

interface UserRepositoryInterface
{
    public function addUser(User $user): void;
    public function updateUser(): void;
    public function deleteUser(User $user): void;
}