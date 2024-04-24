<?php

namespace App\Http\Controllers;

use App\Models\Offre;
use App\Models\Bricole;
use App\DTO\reclamationDTO;
use App\Models\Reclamation;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreReclamationRequest;
use App\Http\Requests\UpdateReclamationRequest;
use App\Repositories\ReclamationRepositoryInterface;

class ReclamationController extends Controller
{

    public function __construct(public ReclamationRepositoryInterface $repository){

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {



        $reclamations = $this->repository->getReclamations();
        return view('Client.reclamation',[
            'reclamations' => $reclamations, 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReclamationRequest $request,Offre $offre)
    {
        $reclamatioDto = reclamationDTO::fromRequest($request);
        $this->repository->store($reclamatioDto, $offre);

        return redirect('/reclamation')->with('reclamation', 'Reclamation est envoyer avec succes');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reclamation $reclamation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reclamation $reclamation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReclamationRequest $request, Reclamation $reclamation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reclamation $reclamation)
    {
        //
    }
}
