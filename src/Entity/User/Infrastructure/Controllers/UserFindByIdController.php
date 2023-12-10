<?php 

namespace Src\Entity\User\Infrastructure\Controllers;

use Illuminate\Http\Request;
use Src\Entity\User\Application\Find\UserFindByIdUseCase;

final class UserFindByIdController{

    private $findByIdUseCase;
    public function __construct(UserFindByIdUseCase $findByIdUseCase)
    {
        $this->findByIdUseCase = $findByIdUseCase;
    }

    public function __invoke(Request $request, int $id ): ?array{
        return $this->findByIdUseCase->__invoke($request, $id);
    }

}