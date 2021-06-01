<?php

namespace App\Http\Controllers;
use App\Models\Dataselect;
use App\Models\Desing;
use App\Models\Contract;
use Illuminate\Http\Request;

class GetdataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dataAjaxDataSelect(Request $request )
    {
        $data = [];

        if($request->has('q')){
            $search = $request->q;
            $data =Dataselect::select("id","constructionOperation")
            		->where('constructionOperation','LIKE',"%$search%")
            		->get();
        }else{
            $data =Dataselect::select("id","constructionOperation")->get();
        }
        return response()->json($data);
    }

    public function desingName(Request $request )
    {
        $data = [];

        if($request->has('q')){
            $search = $request->q;
            $data =Desing::select("id","desings")
            		->where('desings','LIKE',"%$search%")
            		->get();
        }else{
            $data =Desing::select("id","desings")->get();
        }
        return response()->json($data);
    }

    public function contractName(Request $request )
    {
        $data = [];

        if($request->has('q')){
            $search = $request->q;
            $data =Contract::select("id","contract")
            		->where('contract','LIKE',"%$search%")
            		->get();
        }else{
            $data =Contract::select("id","contract")->get();
        }
        return response()->json($data);
    }



}
