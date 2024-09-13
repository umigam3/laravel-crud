<?php

namespace App\UI\Http\Controllers;

use App\Domain\Models\Procedure;
use App\Domain\Repository\ProcedureRepositoryInterface;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class ProcedureController extends Controller
{
    protected $procedureRepository;

    public function __construct(ProcedureRepositoryInterface $procedureRepository)
    {
        $this->procedureRepository = $procedureRepository;
    }

    public function getAllProcedures()
    {
        $procedures = $this->procedureRepository->getAll();
        return view('procedures', compact('procedures'));
    }

    public function updateForm(int $id)
    {
        $procedure = $this->procedureRepository->getProcedure($id);
        return view('update', compact('procedure'));
    }

    public function createForm()
    {
        return view('create');
    }

    public function updateProcedure(Request $request, $id)
    {
        $request->validate([
            'type' => 'required|string|max:255',
            'state' => 'required|string',
            'dni' => 'required|string',
        ]);


        $procedure = $this->procedureRepository->getProcedure($id);
        $procedure->type = $request->input('type');
        $procedure->state = $request->input('state');
        $procedure->dni = $request->input('dni');
        $procedure->save();

        return redirect(route('index'));
    }

    public function createProcedure(Request $request)
    {
        $request->validate([
            'type' => 'required|string|max:255',
            'state' => 'required|string',
            'dni' => 'required|string',
        ]);

        $procedure = new Procedure();
        $procedure->type = $request->input('type');
        $procedure->state = $request->input('state');
        $procedure->dni = $request->input('dni');
        $procedure->save();

        return redirect(route('index'));
    }

}
