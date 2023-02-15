<?php

namespace App\Http\Controllers;

use App\Models\AirPollution;
use App\Http\Resources\AirPollutionResource;
use Illuminate\Routing\Controller;
use App\Http\Requests\AirPollutionRequest;
use App\Http\Resources\Collections\AirPollutionCollection;

class AirPollutionControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AirPollutionCollection
     */
    public function index()
    {
        //$this->authorize('viewAny', AirPollution::class);

        $airPollution = AirPollution::all();

        return new AirPollutionCollection($airPollution);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\AirPollutionRequest  $request
     * @return \App\Http\Resources\AirPollutionResource
     */
    public function store(AirPollutionRequest $request)
    {
        //$this->authorize('create', AirPollution::class);

        $airPollution = AirPollution::create($request->validated());

        return new AirPollutionResource($airPollution);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AirPollution  $airPollution
     * @return \App\Http\Resources\AirPollutionResource
     */
    public function show(AirPollution $airPollution)
    {
        //$this->authorize('view', $airPollution);

        return new AirPollutionResource($airPollution);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\AirPollutionRequest  $request
     * @param  \App\Models\AirPollution  $airPollution
     * @return \App\Http\Resources\AirPollutionResource
     */
    public function update(AirPollutionRequest $request, AirPollution $airPollution)
    {
        //$this->authorize('update', $airPollution);

        $airPollution->update($request->validated());

        return new AirPollutionResource($airPollution);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AirPollution  $airPollution
     * @return \Illuminate\Http\Response
     */
    public function destroy(AirPollution $airPollution)
    {
        //$this->authorize('delete', $airPollution);

        //$airPollution->delete();

        // return new AirPollutionResource($airPollution);


        return response('AirPollution deletion is not allowed', 405);
    }
}
