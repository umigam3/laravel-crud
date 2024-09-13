<?php

namespace App\Infrastructure\Repository;

use App\Domain\Models\Procedure;
use App\Domain\Repository\ProcedureRepositoryInterface;

class ProcedureRepository implements ProcedureRepositoryInterface 
{
    public function getAll() {
        return Procedure::all();
    }

    public function getProcedure(int $id) {
        return Procedure::findOrFail($id);
    }
}
