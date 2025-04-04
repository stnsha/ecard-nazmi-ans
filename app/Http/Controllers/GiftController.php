<?php

namespace App\Http\Controllers;

use App\Models\Gift;
use Illuminate\Http\Request;

class GiftController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gifts = Gift::all();
        return view('gift.index', compact('gifts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('gift.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'pic_url' => ['required', 'url'],
            'item_url' => ['required', 'url'],
            'quantity' => ['required', 'integer', 'min:1'],
        ]);

        if ($validated) {
            $gift = Gift::create($validated);
            return redirect()->route('gift.index')->with('success', 'Gift successfully added.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Gift $gift)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gift $gift)
    {
        return view('gift.edit', compact('gift'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gift $gift)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'pic_url' => ['required', 'url'],
            'item_url' => ['required', 'url'],
            'quantity' => ['required', 'integer', 'min:1'],
        ]);

        if ($validated) {
            $gift->title  = $request->title;
            $gift->pic_url = $request->pic_url;
            $gift->item_url = $request->item_url;
            $gift->quantity = $request->quantity;
            $gift->save();
            return redirect()->route('gift.index')->with('success', 'Gift ' . $gift->id . ' successfully updated.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gift $gift)
    {
        //
    }
}
