<?php

namespace App\Repositories\Eloquent;

use App\Models\Offre;
use App\Models\Bricole;
use App\DTO\reclamationDTO;
use App\Models\Reclamation;
use Illuminate\Support\Facades\Auth;
use App\Repositories\ReclamationRepositoryInterface;
use TimWassenburg\RepositoryGenerator\Repository\BaseRepository;

/**
 * Class ReclamationRepository.
 */
class ReclamationRepository  implements ReclamationRepositoryInterface
{
    /**
     * UserRepository constructor.
     *
     * @param Reclamation $model
     */
    public function store(reclamationDTO $reclamatioDto,Offre $offre){

       $date = $this->getArr($reclamatioDto) + ['offre_id' => $offre->id];
        Reclamation::create($date);
        return true;
    }
    private function getArr(reclamationDTO $reclamatioDto): array
    {
        return [
            "titre" => $reclamatioDto->titre,
            'description'  => $reclamatioDto->description,


        ];
    }

    public function getReclamations(){
        $reclamations = array();
        $bricoles = Bricole::where('client_id', Auth::user()->clients->first()->id)->get();
        $bricoles = $bricoles->load('offres');
        foreach ($bricoles as $bricole) {
            foreach ($bricole->offres as $offre) {
                if ($offre->reclamation) {
                    array_push($reclamations, $offre->reclamation);
                }
            }
        }
        return $reclamations;
    }
}
