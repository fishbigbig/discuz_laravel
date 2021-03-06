<?php

namespace App\Repositories;

use Bosnadev\Repositories\Contracts\RepositoryInterface;
use Bosnadev\Repositories\Eloquent\Repository;

class UserRepository extends Repository
{
    public function model()
    {
        return 'App\Models\User\User';
    }

    public function getUserDetail($uid)
    {
        return $this->model->getUserDetail($uid);
    }
}
