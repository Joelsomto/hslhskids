<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Zone;
use App\Models\State;
use App\Models\Country;
use Illuminate\Support\Facades\Storage;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
    public function index()
    {
        $zones = $this->loadJson('zones');
        $countries = $this->loadJson('countries');
        return view('pages.index', compact('zones', 'countries'));
        //  $zones = Zone::active()->orderBy('zone_name')->get();
        // $countries = Country::orderBy('country_name')->get();
        // return view('pages.index', compact('zones', 'countries'));
    }
    public function about()
    {
        $zones = $this->loadJson('zones');
        $countries = $this->loadJson('countries');
        return view('pages.about', compact('zones', 'countries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
