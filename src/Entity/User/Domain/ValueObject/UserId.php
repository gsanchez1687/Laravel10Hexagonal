<?php 
namespace Src\Entity\User\Domain\ValueObject;
final class UserId{
    private $id;

    public function __construct(int $id){
        $this->id = $id;
    }

    public function value(): int{
        return $this->id;
    }
}