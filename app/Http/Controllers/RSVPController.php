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
            'wishes' => 'nullable|regex:/^(\S+\s?){0,25}$/',
        ], [
            'name.required' => 'Sila isi nama anda.',
            'pax.required' => 'Sila pilih bilangan pax.',
            'is_attend.required' => 'Sila pilih sama ada anda akan hadir atau tidak.',
            'time_slot.required' => 'Sila pilih slot masa.',
            'wishes.regex' => 'Ucapan tidak boleh melebihi 25 perkataan.',
        ]);



        RSVP::create($validated);

        return response()->json(['message' => 'RSVP berjaya!']);
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
