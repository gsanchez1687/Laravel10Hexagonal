<?php

namespace Src\Entity\User\Infrastructure\Controllers;

use Src\Entity\User\Application\Find\UserFindAllUseCase;

final class UserFindAllController
{

    //Inyeccion de dependencias
    private $findAllUseCase;
    public function __construct(UserFindAllUseCase $findAllUseCase )
    {
        $this->findAllUseCase = $findAllUseCase;
    }

    public function __invoke(): ?array{
        return $this->findAllUseCase->__invoke();
    }
}