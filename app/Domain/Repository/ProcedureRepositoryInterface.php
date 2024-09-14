<?php

namespace App\Domain\Repository;

interface ProcedureRepositoryInterface
{
    public function getAll();
    public function getProcedure(int $id);
    public function getByState(int $state);
}
