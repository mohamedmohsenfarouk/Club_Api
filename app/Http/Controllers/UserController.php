<?php

namespace App\Http\Controllers;

use App\Http\Resources\User as UserResource;
use App\Session;
use App\Sport;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function booking(Request $request)
    {
        $name = $request->input('name');
        $session_id = $request->input('session_id');
        $return = '';
        $sessions_update = '';
        $new_count_booked = '';
        $sessions = Session::find($session_id);
        if ($sessions->booked_users < $sessions->attendance_limit) {
            $user = User::create([
                'name' => $name,
                'session_id' => $session_id,
            ]);
            if (!empty($user)) {
                $new_count_booked = $sessions->booked_users + 1;
                $sport_data = Sport::find($sessions->sport_id);
                $attendees_no = $sport_data->attendees_no + 1;
                $sessions_update = Session::where('id', '=', $session_id)->update(['booked_users' => $new_count_booked]);
                Sport::where('id', '=', $sessions->sport_id)->update(['attendees_no' => $attendees_no]);
            }
            return new UserResource($user);
        } else {
            return 'Session is full';
        }

    }

    public function show($id)
    {
        $all_data = [];
        $user = User::find($id);
        $sessions = Session::where('id', '=', $user->session_id)->get();
        foreach($sessions as $session){
            array_push($all_data, [
                'name' => $user->name,
                'session_name' => $session->name,
            ]);
        }
        return new UserResource($all_data);
    }
}
