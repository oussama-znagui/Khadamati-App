<?php

namespace App\Http\Controllers;

use App\Models\Offre;
use App\Http\Requests\StoreOffreRequest;
use App\Http\Requests\UpdateOffreRequest;
use App\Models\Bricole;
use App\Repositories\OffreRepositoryInterface;

class OffreController extends Controller
{

    public function __construct(public OffreRepositoryInterface $repository)
    {
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
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
    public function store(StoreOffreRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Offre $offre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Offre $offre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Offre $offre)
    {

        $this->repository->update($offre);
        return redirect('/confirmation')->with('success', 'Offre accepter avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Offre $offre)
    {
        //
    }
}
