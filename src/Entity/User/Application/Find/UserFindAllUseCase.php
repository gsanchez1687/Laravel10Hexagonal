<?php

namespace Src\Entity\User\Application\Find;

use Src\Entity\User\Domain\Contracts\RepositoryContract;
use App\Entity\User\Domain\ValueObject\UserId;

final class UserFindAllUseCase{

    private $repository;

    public function __construct(RepositoryContract $repository){
        $this->repository = $repository;
    }

    public function __invoke(int $int): ?array {
        return $this->repository->findAll();
    }
}