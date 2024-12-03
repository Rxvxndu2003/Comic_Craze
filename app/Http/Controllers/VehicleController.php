<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rent;
use Auth;

class VehicleController extends Controller
{
    public function index()
    {
        $users = Auth::user();
        $rents = Rent::where('user_id', Auth::id())->get();

        return view('pages.vehicle', compact('users', 'rents'));
    }

    // AppointmentsController.php
    public function fetchRents(Request $request)
    {
        // Fetch rents from the database
        $rents = Rent::all(); // You can modify this to add pagination if needed

        // Return rents in JSON format for AJAX
        return view('pages.rent', compact('rents'));
    }

public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'description' => 'required|string',
        'phone' => 'required|string',
    ]);

    $user_id = Auth::id();

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('rents/images', 'public');
    }

    $rents = new Rent();
    $rents->user_id = $user_id;
    $rents->name = $validatedData['name'];
    $rents->image = $imagePath;
    $rents->description= $validatedData['description'];
    $rents->phone = $validatedData['phone'];
    $rents->save();

    return redirect()->route('rents.index')->with('message', 'Post add successfully');
}

    public function destroy($id)
    {
        $rents = Rent::findOrFail($id);
        if ($rents->user_id == Auth::id()) {
            $rents->delete();
            return redirect()->back()->with('message', 'Post delete successfully.');
        }

        return redirect()->back()->with('error', 'You are not authorized to delete this vehicle.');
    }
}