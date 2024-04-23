<?php

namespace App\Repositories\Eloquent;

use App\Models\Reclamation;
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
    public function store(){
        dd('parfait');
    }
}
