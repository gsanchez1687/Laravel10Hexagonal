<?php

namespace App\Entity\User\Domain;

use App\Entity\User\Domain\ValueObject\Fullname;
use App\Entity\User\Domain\ValueObject\Email;
use App\Entity\User\Domain\ValueObject\Password;

final class User {
    private $name;
    private $lastname;
    private $email;
    private $password;

    public function __construct(Fullname $name, Fullname $lastname, Email $email, Password $password) {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->password = $password;
    }

    public function Name(): Fullname {
        return $this->name;
    }

    public function Lastname(): Fullname {
        return $this->lastname;
    }

    public function Email(): Email {
        return $this->email;
    }

    public function Password(): Password {
        return $this->password;
    }
}