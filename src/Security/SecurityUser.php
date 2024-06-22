<?php
declare(strict_types=1);

namespace App\Security;

use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class SecurityUser implements UserInterface, PasswordAuthenticatedUserInterface
{
    private int $id;
    private string $email;
    private string $password;
    private ?array $roles;

    public function __construct(int $id, string $email, string $password, ?array $role)
    {
        $this->id = $id;
        $this->email = $email;
        $this->password = $password;
        $this->roles = $role;
    }

    public function getId(): int
    {
        return $this->id;
    }
    public function getPassword(): string
    {
        return $this->password;
    }

    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function getUserIdentifier(): string
    {
        return strtolower($this->email);
    }

    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }
}