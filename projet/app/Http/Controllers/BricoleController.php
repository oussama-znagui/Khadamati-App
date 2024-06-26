<?php

namespace App\Http\Controllers;

use App\Models\Offre;
use App\DTO\bricoleDTO;
use App\Models\Bricole;
use App\Models\Profession;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreBricoleRequest;
use App\Http\Requests\UpdateBricoleRequest;
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

    public function bricole(){
        $data1 = array();
        $bricoles = Bricole::with('offres')->get();
        foreach ($bricoles as $bricole) {

        
            if($bricole->offres){
                foreach ($bricole->offres as $offre) {
                    $offreConfirme = false;
                    if($offre->confirmation == 1){
                        $offreConfirme = true;
                    }
                }
                if($offreConfirme == false){
                    array_push($data1, $bricole);
                }
            }else{
                array_push($data1, $bricole);
            }
        }

        $data = array();
       
      
        foreach ($data1 as $bricole) {
          
            if ($bricole->client->user->ville_id == Auth::user()->freelancers()->first()->user->ville_id && $bricole->profession_id == Auth::user()->freelancers()->first()->profession_id  ){
                $timeAgo = $bricole->created_at->diffForHumans();
                $bricole->timeAgo = $timeAgo;
                array_push($data, $bricole);

            }
                
         
        }
      
        return view('Freelancer.bricolePubliee', [
            'bricoles' => $data,
        ]);

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
        $offres = $this->repository->getOffres($bricole);
        $bricole = $this->repository->show($bricole);
        return view('Client.bricole', [
            'bricole' => $bricole,
            'offres' => $offres,
            'offreConfirme' => $this->repository->OffreConfirme($bricole),
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
