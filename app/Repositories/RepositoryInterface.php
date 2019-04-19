<?php

namespace App\Repositories;

interface RepositoryInterface
{
    public function getAll();

    public function getById($id);

    public function create(array $data);

    public function update($id, array $data);

    public function delete($id);

    public function paginate($limit = 0);
}
