<?php

namespace Src\Entity\User\Domain\Contracts;

interface RepositoryContract
{
   public function findAll(): ?array;
}
