<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Barryvdh\DomPDF\Facade\Pdf;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function generatePdf()
    {
        $data = []; // Add any data you want to pass to the view if needed
        $pdf = Pdf::loadView('view-pdf', $data)->setPaper('a4', 'landscape')->setOptions(['isHtml5ParserEnabled' => true,'isRemoteEnabled' => true]);
        return $pdf->download('catalog.pdf');
    }
}
