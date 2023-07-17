<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class Dashboard extends Controller
{
    /**
     * Show the form for creating the resource.
     */
    public function create(): never
    {
        abort(404);
    }

    /**
     * Store the newly created resource in storage.
     */
    public function store(Request $request): never
    {
        abort(404);
    }

    /**
     * Display the resource.
     */
    public function show()
    {
        //
        return Inertia::render('Dashboard');
    }

    /**
     * Show the form for editing the resource.
     */
    public function edit()
    {
        //
        abort(404);
    }

    /**
     * Update the resource in storage.
     */
    public function update(Request $request)
    {
        //
        abort(404);
    }

    /**
     * Remove the resource from storage.
     */
    public function destroy(): never
    {
        abort(404);
    }
}
