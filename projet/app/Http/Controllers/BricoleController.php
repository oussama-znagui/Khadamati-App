<?php

namespace App\Http\Controllers;

use App\DTO\bricoleDTO;
use App\Models\Bricole;
use App\Models\Profession;
use Illuminate\Support\Carbon;
use App\Http\Requests\StoreBricoleRequest;
use App\Http\Requests\UpdateBricoleRequest;
use App\Models\Offre;
use App\Repositories\BricoleRepositoryInterface;

class BricoleController extends Controller
{

    public function __construct(public BricoleRepositoryInterface $repository)
    {
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bricoles = $this->repository->index();

        return view(
            'Client.history',
            [
                'bricoles' => $bricoles
            ]
        );
    }
    public function addform()
    {
        $professions = Profession::All();
        return view('Client.postJob', [
            "professions" => $professions,

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
    public function store(StoreBricoleRequest $request)
    {
        $bricoleDTO = bricoleDTO::fromRequest($request);
        $bricole = $this->repository->store($bricoleDTO);
    }

    /**
     * Display the specified resource.
     */
    public function show(Bricole $bricole)
    {
        $bricole = $this->repository->show($bricole);
        return view('Client.bricole', [
            'bricole' => $bricole,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bricole $bricole)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBricoleRequest $request, Bricole $bricole)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bricole $bricole)
    {
        //
    }
}
