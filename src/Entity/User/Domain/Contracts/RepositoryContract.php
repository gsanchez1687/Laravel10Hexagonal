<?php

namespace Src\Entity\User\Domain\Contracts;

use App\Entity\User\Domain\ValueObject\UserId;

interface RepositoryContract
{
   public function findAll(): ?array;

   public function findById(UserId $id): ?array;
}
