<?php

namespace App\Http\Controllers;

use App\Models\Temperature;
use App\Http\Resources\TemperatureResource;
use Illuminate\Routing\Controller;
use App\Http\Requests\TemperatureRequest;
use App\Http\Resources\Collections\TemperatureCollection;

class TemperatureControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return TemperatureCollection
     */
    public function index()
    {
        //$this->authorize('viewAny', Temperature::class);

        $temperature = Temperature::all();

        return new TemperatureCollection($temperature);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\TemperatureRequest  $request
     * @return \App\Http\Resources\TemperatureResource
     */
    public function store(TemperatureRequest $request)
    {
        //$this->authorize('create', Temperature::class);

        $temperature = Temperature::create($request->validated());

        return new TemperatureResource($temperature);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Temperature  $temperature
     * @return \App\Http\Resources\TemperatureResource
     */
    public function show(Temperature $temperature)
    {
        //$this->authorize('view', $temperature);

        return new TemperatureResource($temperature);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\TemperatureRequest  $request
     * @param  \App\Models\Temperature  $temperature
     * @return \App\Http\Resources\TemperatureResource
     */
    public function update(TemperatureRequest $request, Temperature $temperature)
    {
        //$this->authorize('update', $temperature);

        $temperature->update($request->validated());

        return new TemperatureResource($temperature);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Temperature  $temperature
     * @return \Illuminate\Http\Response
     */
    public function destroy(Temperature $temperature)
    {
        //$this->authorize('delete', $temperature);

        //$temperature->delete();

        // return new TemperatureResource($temperature);


        return response('Temperature deletion is not allowed', 405);
    }
}
