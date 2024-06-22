<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<User>
 */
class UserRepository extends ServiceEntityRepository implements UserRepositoryInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }

    public function addUser(User $user): void {
        $this->getEntityManager()->persist($user);
        $this->getEntityManager()->flush();
    }

    public function updateUser(): void {
        $this->getEntityManager()->flush();
    }

    public function deleteUser(User $user): void {
        $this->getEntityManager()->remove($user);
    }
    public function findByEmail(string $email): ?User
    {
        return $this->repository->findOneBy(['email' => $email]);
    }
}
