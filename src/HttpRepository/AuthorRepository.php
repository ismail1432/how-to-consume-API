<?php

namespace App\HttpRepository;

use App\Model\Author;

class AuthorRepository extends AbstractRepository
{
    public function getModel(): string
    {
        return Author::class;
    }
}