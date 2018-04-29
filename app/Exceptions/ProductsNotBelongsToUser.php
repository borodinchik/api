<?php

namespace App\Exceptions;

use Exception;

class ProductsNotBelongsToUser extends Exception
{
    public function render()
    {
        return ['errors' => 'Product Not Belongs To User'];
    }
}
