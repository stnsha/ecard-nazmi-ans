<?php

namespace App\Http\Controllers;

use App\Models\Gift;
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
        $slots = Slot::where('status', 1)->get();
        return view('rsvp', compact('slots'));
    }

    public function gift()
    {
        $gifts = Gift::where('is_reserved', 0)->get();
        return view('gift', compact('gifts'));
    }
}
