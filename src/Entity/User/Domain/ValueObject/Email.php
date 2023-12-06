<?php

namespace App\Entity\User\Domain\ValueObject;

final class Email{

    private $email;
    public function __construct(string $email){
        $this->email = $email;
    }

    public function value(): string{
        return $this->email;
    }

}