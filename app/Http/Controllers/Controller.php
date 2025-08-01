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
        $pdf = Pdf::setOption(
            [
                // 'isHtml5ParserEnabled' => true,
                'fontDir' => public_path('storage/fonts'),
                'fontCache' => public_path('storage/fonts'),
                'defaultFont' => 'serif',
                'isRemoteEnabled' => true
            ]
        )->loadView('view-pdf', $data)->setPaper('a4', 'landscape');
        return $pdf->stream('catalog.pdf');
    }
}
