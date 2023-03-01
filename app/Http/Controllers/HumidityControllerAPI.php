<?php

namespace App\Http\Controllers;

use App\Models\Humidity;
use App\Http\Resources\HumidityResource;
use Illuminate\Routing\Controller;
use App\Http\Requests\HumidityRequest;
use App\Http\Resources\Collections\HumidityCollection;

class HumidityControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return HumidityCollection
     */
    public function index()
    {
        //$this->authorize('viewAny', Humidity::class);

        $humidity = Humidity::all();

        return new HumidityCollection($humidity);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\HumidityRequest  $request
     * @return \App\Http\Resources\HumidityResource
     */
    public function store(HumidityRequest $request)
    {
        //$this->authorize('create', Humidity::class);

        $humidity = Humidity::create($request->validated());

        return new HumidityResource($humidity);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Humidity  $humidity
     * @return \App\Http\Resources\HumidityResource
     */
    public function show(Humidity $humidity)
    {
        //$this->authorize('view', $humidity);

        return new HumidityResource($humidity);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\HumidityRequest  $request
     * @param  \App\Models\Humidity  $humidity
     * @return \App\Http\Resources\HumidityResource
     */
    public function update(HumidityRequest $request, Humidity $humidity)
    {
        //$this->authorize('update', $humidity);

        $humidity->update($request->validated());

        return new HumidityResource($humidity);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Humidity  $humidity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Humidity $humidity)
    {
        //$this->authorize('delete', $humidity);

        //$humidity->delete();

        //return new HumidityResource($humidity);


        return response('Humidity deletion is not allowed', 405);
    }
}
