<?php 

namespace App\Entity\User\Domain\ValueObject;

final class Password{

    private $password;
    public function __construct(string $password){
        $this->password = $password;
    }

    public function value(): string{
        return $this->password;
    }

}