<?php

namespace App\Entity\User\Domain\ValueObject;

final class Username{

    private $username;
    public function __construct(string $username){
        $this->username = $username;
    }

    public function value(): string{
        return $this->username;
    }

}