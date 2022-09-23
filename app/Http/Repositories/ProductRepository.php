<?php

namespace App\Http\Repositories;

use Illuminate\Support\Collection;
use App\Models\Product;

interface ProductRepository
{
    function getAll(): Collection;

    function getById(int $id): ?Product;

    function save(Product $product): Product;

    function delete(int $id): int;
}
