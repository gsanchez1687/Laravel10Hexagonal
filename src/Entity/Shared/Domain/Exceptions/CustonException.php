<?php

namespace Src\Entity\Shared\Domain\Exceptions;

class CustonException extends \Exception
{
    public function toException(): ?array
    {
        $classTemp = new \ReflectionClass(get_class($this));
        $class = explode('\\', $classTemp->getName());
        $response = [
            'status' => $this->getCode(),
            'error' => true,
            'class'=>end($class),
            'message' => $this->getMessage(),
        ];
        return $response;
    }
}