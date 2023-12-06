<?php

namespace Src\Entity\User\Infrastructure\Repositories\Eloquent;
use Src\Entity\User\Domain\Contracts\RepositoryContract;
use Src\Entity\User\Infrastructure\Repositories\Eloquent\User;

final class UserRepository implements RepositoryContract{

    private $user;
    public function __construct()
    {
        $this->user = new User;
    }

    public function findAll(): ?array{
       
        return $this->user->all()->toArray();
    }

}
