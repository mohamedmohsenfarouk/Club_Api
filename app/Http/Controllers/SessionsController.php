<?php

namespace App\Http\Controllers;

use App\Http\Resources\Session as SessionResource;
use App\Session;
use App\Sport;

class SessionsController extends Controller
{
    public function index()
    {
        $all_data = [];
        $sessions = Session::orderBy('sport_id', 'DESC')->get();
        foreach ($sessions as $val) {
            $sports = Sport::find($val->sport_id);
            array_push($all_data, [
                'id' => $val->id,
                'name' => $val->name,
                'attendance_limit' => $val->attendance_limit,
                'sport_name' => $sports->name,
            ]);
        }
        return new SessionResource($all_data);
    }

    public function show($id)
    {
        $all_data = [];
        $sessions = Session::where('sport_id', '=', $id)->get();
        foreach ($sessions as $val) {
            $sports = Sport::find($val->sport_id);
            array_push($all_data, [
                'id' => $val->id,
                'name' => $val->name,
                'attendance_limit' => $val->attendance_limit,
                'sport_name' => $sports->name,
            ]);
        }
        return new SessionResource($all_data);

    }

    public function availableSlots()
    {
        $all_data = [];
        $sessions = Session::get();
        foreach ($sessions as $val) {
            if ($val->booked_users < $val->attendance_limit) {
                $sports = Sport::find($val->sport_id);
                array_push($all_data, [
                    'id' => $val->id,
                    'name' => $val->name,
                    'attendance_limit' => $val->attendance_limit,
                    'booked' => $val->booked_users,
                    'available_slots' => $val->attendance_limit - $val->booked_users,
                    'sport_name' => $sports->name,
                ]);
            }
        }
        return new SessionResource($all_data);
    }

    public function max_attendees()
    {
        $all_data = [];
        $Sport =Sport::where('attendees_no', \DB::raw("(select max(`attendees_no`) from sports)"))->get();
        foreach($Sport as $val){
            array_push($all_data, [
                'sport_name' => $val->name,
                // 'Max attendees' => $val->attendees_no
            ]);
        }
        return new SessionResource($all_data);
    }
}
