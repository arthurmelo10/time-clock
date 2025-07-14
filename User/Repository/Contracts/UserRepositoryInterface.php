<?php

namespace User\Repository\Contracts;

use User\Models\User;

interface UserRepositoryInterface
{
    public function insert(array $data): User;

    public function find(string $id): User;

    public function update(string $id, array $data): bool;

    public function delete(string $id): bool;
}
