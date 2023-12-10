<?php

namespace Src\Entity\User\Infrastructure\Repositories\Eloquent;

use Src\Entity\User\Domain\Contracts\RepositoryContract;
use App\Entity\User\Domain\ValueObject\UserId;
use Src\Entity\User\Infrastructure\Repositories\Eloquent\User;

final class UserRepository implements RepositoryContract{

    private $model;
    public function __construct()
    {
        $this->model = new User;
    }

    public function findAll(): ?array{
        return $this->model->all()->toArray();
    }

    public function findById($id): ?array{
        return $this->model->find($id)->toArray();
    }

}
