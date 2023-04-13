<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class TrainController extends Controller
{
    public function index()
    {
        $trains = Train::recentlyDeparted()->get();
        
        return view('trains.index', compact('trains'));
    }
}
