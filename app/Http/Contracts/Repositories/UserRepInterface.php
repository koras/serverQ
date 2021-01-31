<?php

namespace App\Http\Contracts\Repositories;

interface UserRepInterface {

    public function allItems();

    public function createItem(array $data);

    public function updateItem(array $data, $id);
 
    public function withItem($id);

    // show the record with the given id
    public function show($id, $secret);

}