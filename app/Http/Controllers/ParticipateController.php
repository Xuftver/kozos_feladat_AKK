<?php

namespace App\Http\Controllers;

use App\Models\Participate;
use Illuminate\Http\Request;

class ParticipateController extends Controller
{
    public function index()
    {
        $participates =Participate::all();
        return $participates;
    }

    public function show($event_id, $user_id)
    {
        $participate = Participate::where("event_id", $event_id)
        ->where("user_id", $user_id)
        ->get();
        return $participate[0];
    }

    public function store(Request $request)
    {
        $participate= new Participate();
        $participate->event_id=$request->event_id;
        $participate->user_id=$request->user_id;
        $participate->present=$request->present;
        $participate->save();
    }
    public function update(Request $request, $event_id, $user_id)
    {
        $participate=ParticipateController::show($event_id, $user_id);
        $participate->event_id=$request->event_id;
        $participate->user_id=$request->user_id;
        $participate->present=$request->present;
        $participate->save();
    }

    public function destroy($event_id, $user_id)
    {
        ParticipateController::show($event_id, $user_id)->delete();

    }
}
