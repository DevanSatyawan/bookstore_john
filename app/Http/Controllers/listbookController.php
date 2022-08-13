<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\listbook;
use Illuminate\Support\Facades\DB;
use ILLuminate\Pagination\Paginator;

class listbookController extends Controller
{
    public function index(Request $request)
    {
        $list = listbook::all();
      //   $cari = $request->get('cari');
        return view('listbook', compact('list'));
}

    public function ten(Request $request)
    {
        $top = listbook::all()->sortByDesc('voter')->take(10);
        return view('topten', compact('top'));
}


     public function search(Request $request)
    {
    $cari = $request->get('cari');
    $list = listbook::where('bookname','like',"%".$cari."%")->paginate(10);
    Paginator::useBootstrap();
    return view('listbook', compact('list','cari'));
    }

}
