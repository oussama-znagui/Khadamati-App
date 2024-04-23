<?php

namespace App\Repositories\Eloquent;

use Carbon\Carbon;
use App\Models\Offre;
use App\DTO\bricoleDTO;
use App\Models\Bricole;
use Illuminate\Support\Facades\Auth;
use App\Repositories\BricoleRepositoryInterface;
use TimWassenburg\RepositoryGenerator\Repository\BaseRepository;

/**
 * Class BricoleRepository.
 */
class BricoleRepository extends BaseRepository implements BricoleRepositoryInterface
{
    /**
     * UserRepository constructor.
     *
     * @param Bricole $model
     */
    public function __construct(Bricole $model)
    {
        parent::__construct($model);
    }

    public function index()
    {
        $now = Carbon::now()->format('d-m-Y');
        // dd($now);

        $bricoles = Bricole::where('client_id', Auth::user()->clients->first()->id)->get();

        foreach ($bricoles as $bricole) {

            $timeAgo = $bricole->created_at->diffForHumans();
            $bricole->timeAgo = $timeAgo;
            $bricole->offreConfirme = false;
            // dd($bricole);
            $offres = Offre::where('bricole_id', $bricole->id)->count();
            $offresConfirme = Offre::where('bricole_id', $bricole->id)->where('confirmation', "1")->count();
            if ($offresConfirme != 0) {
                $bricole->offreConfirme = true;
            }
            $bricole->offreNonConfirme = $offres;
        }


        return $bricoles;
    }

    public function show(Bricole $bricole)
    {
        return Bricole::find($bricole->id);
    }
    public function getOffres(Bricole $bricole)
    {
        $offres =  $bricole->load('offres');
        return $offres->offres;
    }

    public function OffreConfirme(Bricole $bricole){
        $offres =  $bricole->load('offres');
        foreach ($offres->offres as $offre) {
            if($offre->confirmation == 1){
                return true;
            }
        }
        return false;
    }
    

    public function store(bricoleDTO $data)
    {

        Bricole::create($this->getArr($data));
        return abort(redirect('/addJob')->with('message', 'votre demande de service est publié'));
    }
    private function getArr(bricoleDTO $DTO): array
    {
        return [
            "titre" => $DTO->titre,
            'budget'  => $DTO->budget,
            'priorite'  => $DTO->priorite,
            'profession_id'  => $DTO->profession_id,
            'nde'  => $DTO->nde,
            'description'  => $DTO->description,
            'client_id' => Auth::user()->clients->first()->id,

        ];
    }
}
