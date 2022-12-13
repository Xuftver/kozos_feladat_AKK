<?php

namespace App\Http\Controllers;

use App\Models\Agency;
use Illuminate\Http\Request;

class AgencyController extends Controller
{
    //
    public function index(){
        $agencies = response()->json(Agency::all());
        return $agencies;
    }
    public function show($id){
        $agency = response()->json(Agency::find($id));
        return $agency;
    }
    public function store(Request $request){
        $agency = new Agency();
        $agency->name=$request->name;
        $agency->country=$request->country;
        $agency->type=$request->type;
        $agency->save();
    }
    public function update($id, Request $request){
        $agency = Agency::find($id);
        $agency->name=$request->name;
        $agency->country=$request->country;
        $agency->type=$request->type;
        $agency->save();
    }
    public function destroy($id){
        $agency = Agency::find($id);
        $agency->delete();
    }
}
