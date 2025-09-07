<?php

namespace User\Repository;

use Illuminate\Config\Repository as BaseRepository;
use User\Models\User;
use User\Repository\Contracts\UserRepositoryInterface;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    public function insert(array $data): User
    {
        $user = $this->getModel();

        $user->fill($data);

        return $user;
    }

    public function find(string $id): User
    {
        $user = $this->getModel();

        $user->first($id);

        return $user;
    }

    public function update(string $id, array $data): bool
    {
        $user = $this->getModel();
        $user->first($id);

        $user->fill($data);

        return $user->update();
    }

    public function delete(string $id): bool
    {
        $user = $this->getModel();
        $user->first($id);
        return $user->delete();
    }

    private function getModel(): User
    {
        return new User();
    }

}
