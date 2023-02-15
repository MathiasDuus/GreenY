<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Http\Resources\CityResource;
use App\Http\Requests\CityRequest;
use App\Http\Resources\Collections\CityCollection;
use Illuminate\Routing\Controller;

class CityControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return CityCollection
     */
    public function index()
    {
        // $this->authorize('viewAny', City::class);

        $city = City::all();

        return new CityCollection($city);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\CityRequest  $request
     * @return \App\Http\Resources\CityResource
     */
    public function store(CityRequest $request)
    {
        // $this->authorize('create', City::class);

        $city = City::create($request->validated());

        return new CityResource($city);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\City  $city
     * @return \App\Http\Resources\CityResource
     */
    public function show(City $city)
    {
        // $this->authorize('view', $city);

        return new CityResource($city);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\CityRequest  $request
     * @param  \App\Models\City  $city
     * @return \App\Http\Resources\CityResource
     */
    public function update(CityRequest $request, City $city)
    {
        // $this->authorize('update', $city);

        $city->update($request->validated());

        return new CityResource($city);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function destroy(City $city)
    {
        return response('City deletion is not allowed', 405);
    }
}
