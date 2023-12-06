<?php

namespace Src\Entity\User\Application\Find;
use Src\Entity\User\Domain\Exceptions\UserException;
use Src\Entity\User\Infrastructure\Repositories\Eloquent\UserRepository;

final class UserFindAllUseCase{

    private $repository;

    public function __construct(UserRepository $repository){
        $this->repository = $repository;
    }

    public function __invoke(): ?array {
        return $this->repository->findAll();
    }
}