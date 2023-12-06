<?php 

namespace Src\Entity\User\Application\Find;
use Src\Entity\User\Domain\Exceptions\UserException;
final class UserFindAllUseCase{
 
   

    public function __invoke(): ?array {
        throw new UserException('Error al buscar usuarios', 500);
        return [
            'message' => 'Hola mundo desde el caso de uso'
        ];
    }
}