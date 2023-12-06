<?php 

namespace App\Entity\User\Domain\ValueObject;

final class Fullname{

    private $fullname;
    public function __construct(array $fullname){
        $this->fullname = $fullname;
    }

    public function value(): ?array{
        return $this->fullname;
    }

    public function name(): ?string{
        return $this->fullname['name'];
    }

    public function lastname(): ?string{
        return $this->fullname['lastname'];
    }

    public function fullname(): ?string{
        return $this->fullname['name'].' '.$this->fullname['lastname'];
    }

}