<?php

namespace App\Http\Controllers;

use App\Models\Offre;
use App\DTO\reviewDTO;
use App\Models\Review;
use App\Http\Requests\StoreReviewRequest;
use App\Http\Requests\UpdateReviewRequest;
use App\Repositories\ReviewRepositoryInterface;

class ReviewController extends Controller
{

    public function __construct(public ReviewRepositoryInterface $repositiry)
    {
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreReviewRequest $request, Offre $offre)
    {
        $reviewDTO = reviewDTO::fromRequest($request);
        $this->repositiry->store($reviewDTO,$offre);
        return redirect('/confirmation')->with('review', 'Avis est envoyer avec succes');
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReviewRequest $request, Review $review)
    {
        $reviewDTO = reviewDTO::fromRequest($request);
        $this->repositiry->update($reviewDTO, $review);
        return redirect('/confirmation')->with('updateReview', 'Avis est modifier avec succes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        //
    }
}
