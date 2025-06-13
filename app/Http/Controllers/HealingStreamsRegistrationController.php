<?php

// app/Http/Controllers/HealingStreamsRegistrationController.php
namespace App\Http\Controllers;

use App\Models\HealingStreamsRegistration;
use App\Models\Country;
use App\Models\State;
use App\Models\Zone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;



class HealingStreamsRegistrationController extends Controller
{
    public function loadJson($filename)
{
    $path = storage_path("app/data/{$filename}.json");
    if (!file_exists($path)) return [];

    $json = file_get_contents($path);
    $data = json_decode($json, true);

    // Strip headers and get only the data if needed
    foreach ($data as $table) {
        if (isset($table['data'])) {
            return $table['data'];
        }
    }

    return [];
}

    public function showRegistrationForm()
    {
        $zones = $this->loadJson('zones');
        $countries = $this->loadJson('countries');
        return view('healing-streams.registration', compact('zones', 'countries'));
    }

    public function getStates(Request $request)
{
    $countryId = $request->input('country_id');
    $states = $this->loadJson('states');

    $filteredStates = array_filter($states, function ($state) use ($countryId) {
        return $state['country_id'] == $countryId;
    });

    usort($filteredStates, function ($a, $b) {
        return strcmp($a['state_name'], $b['state_name']);
    });

    return response()->json(array_values($filteredStates));
}


    public function register(Request $request)
    {
        $validated = $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'nullable|required_without:phone|email|unique:healing_streams_registrations,email',
            'phone' => 'nullable|required_without:email|string|unique:healing_streams_registrations,phone',
            'zone_id' => 'required|exists:zones,zone_id',
            'age' => 'required|integer|min:1|max:120',
            'country_id' => 'required|exists:countries,country_id',
            'state_id' => 'required|exists:states,state_id',
            'city' => 'required|string|max:255',
        ]);

        // Create registration
        $registration = HealingStreamsRegistration::create($validated);

        return redirect()->back()
            ->with('success', 'Registration successful! Thank you for joining Healing Streams.');
    }
}