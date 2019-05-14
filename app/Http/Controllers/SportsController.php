<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Sport;
use App\Http\Resources\Sport as SportResource;

class SportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sports = Sport::get();
        return SportResource::collection($sports);
    }
}
