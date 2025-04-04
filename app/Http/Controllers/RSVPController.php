<?php

namespace App\Http\Controllers;

use App\Models\RSVP;
use Illuminate\Http\Request;

class RSVPController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rsvps = RSVP::all();
        return view('rsvp.index', compact('rsvps'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('rsvp.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'pax' => 'required',
            'is_attend' => 'required',
            'time_slot' => 'required',
            'wishes' => 'nullable',
        ]);

        if ($validated) {
            $rsvp = RSVP::create([
                'name' => $request->name,
                'pax' => $request->pax,
                'is_attend' => $request->is_attend,
                'time_slot' => $request->time_slot,
                'wishes' => $request->wishes,
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(RSVP $rSVP)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RSVP $rSVP)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RSVP $rSVP)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RSVP $rSVP)
    {
        //
    }
}
