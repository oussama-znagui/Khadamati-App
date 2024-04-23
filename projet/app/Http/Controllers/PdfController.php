<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Offre;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


class PdfController extends Controller
{
    public function index()
    {
        return view('Client.facture');
    }
    public function pdf(Offre $offre)
    {

        $data = [
            'bricole' => $offre->bricole,
            'client' => $offre->bricole->client->user,
            'date' => Carbon::now()->format('d-m-Y'),
            'offre' => $offre,

        ];
        $pdf = Pdf::loadView('Client.facture', $data);
        return $pdf->download('facture.pdf');
    }
}
