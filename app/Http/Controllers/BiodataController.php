<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    //
    public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()){
            $biodata = Biodata::with('users');//pake with aja udh bisa ga usah join
            return Datatables::of($biodata)
            ->addColumn('action', function($biodata)
            {
                return view('datatable._action',[
                    'model'     => $biodata,
                    'form_url'  => route('biodata.destroy', $biodata->id),
                    'edit_url'  => route('biodata.edit', $biodata->id),
                    'show_url'  => route('biodata.show', $biodata->id),
                    'confirm_message'=>'Yakin Mau Hapus', $biodata->id. '?',
                ]);
            })->make(true);
        }
        $html = $htmlBuilder // yang mau ditampilin
        ->addColumn(['data'=>'tempat_lahir', 'name'=>'tempat_lahir', 'title'=>'Tempat Lahir' ])//data(yang didatabase) Tempat Lahir yang ditampilin
        ->addColumn([''])
    }
}
