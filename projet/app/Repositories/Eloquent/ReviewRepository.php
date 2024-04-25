<?php

namespace App\Repositories\Eloquent;

use App\DTO\reviewDTO;
use App\Models\Offre;
use App\Models\Review;
use App\Repositories\ReviewRepositoryInterface;
use TimWassenburg\RepositoryGenerator\Repository\BaseRepository;

/**
 * Class ReviewRepository.
 */
class ReviewRepository  implements ReviewRepositoryInterface
{
    /**
     * UserRepository constructor.
     *
     * @param Review $model
     */

    public function store(reviewDTO $reviewDTO,Offre $offre)
    {
        $data = $this->getArr($reviewDTO) + ['offre_id' => $offre->id];
       
        return Review::create($data);
    }

    private function getArr(reviewDTO $reviewDTO): array
    {
        return [
            "commentaire" => $reviewDTO->commentaire,
            'note'  => $reviewDTO->note,


        ];
    }

    public function update(reviewDTO $reviewDTO, Review $review){
        $review =  Review::find($review->id);
        $data = $this->getArr($reviewDTO);
        $review->commentaire = $data['commentaire'];
        $review->note = $data['note'];
        $review->save();
        return true;
    }
}
