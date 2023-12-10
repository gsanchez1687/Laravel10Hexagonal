<?php 

namespace Src\Entity\User\Application\Find;

use Src\Entity\User\Infrastructure\Repositories\Eloquent\UserRepository;
use Symfony\Component\HttpFoundation\Request;
use Src\Entity\User\Domain\ValueObject\UserId;

final class UserFindByIdUseCase{

    private $repository;

    public function __construct(UserRepository $repository){
        $this->repository = $repository;
    }

    public function __invoke(Request $request, int $id): ?array {
        return $this->repository->findById(new UserId($id));
    }
}