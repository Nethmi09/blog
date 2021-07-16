<?php
use Knp\Snappy\Pdf;
use Barryvdh\Snappy\PdfWrapper;

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function test(){
        $html ='<h1>Hello PDF</h1>';
        $pdf = Pdf::loadHtml($html);
        return $pdf->stream('doc.pdf');
    }
}
