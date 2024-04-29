<?php

namespace App\Http\Controllers;

use App\Models\Favorie;
use App\Models\Freelancer;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreFavorieRequest;
use App\Http\Requests\UpdateFavorieRequest;
use GrahamCampbell\ResultType\Success;

class FavorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $favories = Favorie::with('freelancer')->where('client_id', Auth::user()->clients->first()->id)->get();
        return view('Client.favorie-page',[
            'favories' => $favories,
        ])
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
    public function store(Freelancer $freelancer)
    {
        Favorie::create([
            'freelancer_id' => $freelancer->id,
            'client_id' => Auth::user()->clients()->first()->id,
        ]);

        return redirect('favorie-Page')->with('message', 'freelancer ajouté au favorie avec succes');
    }

    /**
     * Display the specified resource.
     */
    public function show(Favorie $favorie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Favorie $favorie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFavorieRequest $request, Favorie $favorie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Favorie $favorie)
    {
        //
    }
}
