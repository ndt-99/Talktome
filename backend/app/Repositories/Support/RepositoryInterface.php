<?php
namespace App\Repositories\Support;

interface RepositoryInterface{
    public function all($request);
    public function find($id);
    public function create($data);
    public function update($id, $data);
    public function delete($id);
}
