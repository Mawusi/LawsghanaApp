<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post1992Article;
use PDF;

class PDFController extends Controller
{
    //
    public function post_act_pdf($id){
       $allPost1992Article = Post1992Article::find(['id' => $id])->toArray()[0];
       $pdf = PDF::loadView('post_1992_legislation.displayed_content_view', compact('allPost1992Article'));
       return $pdf->download('Financial_Administration_Act.pdf');
   }
}
