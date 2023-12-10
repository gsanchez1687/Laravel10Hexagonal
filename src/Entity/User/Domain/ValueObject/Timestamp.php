<?php

namespace Src\Entity\User\Domain\ValueObject;

final class Timestamp{

    private $timestamp;
    public function __construct(array $timestamp){
        $this->timestamp = $timestamp;
    }

    public function value(): ?array{
        return $this->timestamp;
    }

    public function created(): ?string{
        return $this->timestamp['created'];
    }

    public function updated(): ?string{
        return $this->timestamp['updated'];
    }

}