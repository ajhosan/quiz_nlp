<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Soal;

class SoalController extends Controller
{
    $tbl_soal = tbl_soal::all();
	return view('pages_nlp.table_soal', ['tbl_soal' => $tbl_soal]);
}
