<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Http\Resources\LocationResource;
use Illuminate\Routing\Controller;
use App\Http\Requests\LocationRequest;
use App\Http\Resources\Collections\LocationCollection;

class LocationControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return LocationCollection
     */
    public function index()
    {
        //$this->authorize('viewAny', Location::class);

        $location = Location::all();

        return new LocationCollection($location);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\LocationRequest  $request
     * @return \App\Http\Resources\LocationResource
     */
    public function store(LocationRequest $request)
    {
        //$this->authorize('create', Location::class);

        $location = Location::create($request->validated());

        return new LocationResource($location);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Location  $location
     * @return \App\Http\Resources\LocationResource
     */
    public function show(Location $location)
    {
        //$this->authorize('view', $location);

        return new LocationResource($location);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\LocationRequest  $request
     * @param  \App\Models\Location  $location
     * @return \App\Http\Resources\LocationResource
     */
    public function update(LocationRequest $request, Location $location)
    {
        //$this->authorize('update', $location);

        $location->update($request->validated());

        return new LocationResource($location);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function destroy(Location $location)
    {
        //$this->authorize('delete', $location);

        //$location->delete();

        // return new LocationResource($location);


        return response('Location deletion is not allowed', 405);
    }
}
