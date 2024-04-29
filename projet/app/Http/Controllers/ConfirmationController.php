<?php

namespace App\Http\Controllers;

use App\Models\Offre;
use App\Models\Freelancer;
use App\Models\Confirmation;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreConfirmationRequest;
use App\Http\Requests\UpdateConfirmationRequest;

class ConfirmationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $offres = DB::table("offres")
        ->join("bricoles", function ($join) {
            $join->on("offres.bricole_id", "=", "bricoles.id");
        })
            ->where("offres.confirmation", "=", 1)
            ->where("bricoles.client_id", "=",Auth::user()->clients()->first()->id)
            ->get();

       
        return view('Client.confirmation',[
            'offres' => $offres,
        ]);
    }

    public function indexFreelancer(){
        return view('Freelancer.confirmation', [
            'offres' => Offre::where('confirmation', 1)->where('freelancer_id', Auth::user()->freelancers()->first()->id)->get(),
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
    public function store(StoreConfirmationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Confirmation $confirmation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Confirmation $confirmation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateConfirmationRequest $request, Confirmation $confirmation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Confirmation $confirmation)
    {
        //
    }
}
