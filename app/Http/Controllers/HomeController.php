<?php

namespace App\Http\Controllers;

use App\Models\Gift;
use App\Models\RSVP;
use App\Models\Slot;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function location()
    {
        return view('location');
    }

    public function rsvp()
    {
        $rsvps = RSVP::all();
        $slots = Slot::where('status', 1)->get();
        return view('rsvp', compact('slots', 'rsvps'));
    }

    public function gift()
    {
        $gifts = Gift::where('is_reserved', 0)->get();
        return view('gift', compact('gifts'));
    }

    public function getRsvps()
    {
        // Retrieve all RSVPs from the database
        $rsvps = Rsvp::all();

        // Return the RSVPs as JSON
        return response()->json($rsvps);
    }
}
