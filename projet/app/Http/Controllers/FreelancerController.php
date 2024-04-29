<?php

namespace App\Http\Controllers;

use App\Models\Freelancer;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreFreelancerRequest;
use App\Http\Requests\UpdateFreelancerRequest;
use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request as HttpRequest;

class FreelancerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $freelancer = Freelancer::All();
        return view('Client.freelancers', [
            'freelancers' => $freelancer,
        ]);
    }


    public function search(HttpRequest $request)
    {

        $search = $request->input('search');
        if($search == ''){
            $freelancers = Freelancer::with('user', 'profession')->get();
    
        }else{
            $freelancers = Freelancer::with('user', 'profession')->whereHas('user', function ($q) use ($search) {
                $q->where('prenom', 'like', '%' . $search . '%')->orWhere('nom', 'like', '%' . $search . '%');
            })->get();

        }
     

        return response()->json(["freelancers" => $freelancers]);
    }





    public function index1()
    {
        return view('Freelancer.profilePersonel');
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
    public function store(StoreFreelancerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Freelancer $freelancer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Freelancer $freelancer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFreelancerRequest $request, Freelancer $freelancer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Freelancer $freelancer)
    {
        //
    }
}
