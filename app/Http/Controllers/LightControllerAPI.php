<?php

namespace App\Http\Controllers;

use App\Models\Light;
use App\Http\Resources\LightResource;
use Illuminate\Routing\Controller;
use App\Http\Requests\LightRequest;
use App\Http\Resources\Collections\LightCollection;

class LightControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return LightCollection
     */
    public function index()
    {
        //$this->authorize('viewAny', Light::class);

        $light = Light::all();

        return new LightCollection($light);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\LightRequest  $request
     * @return \App\Http\Resources\LightResource
     */
    public function store(LightRequest $request)
    {
        //$this->authorize('create', Light::class);

        $light = Light::create($request->validated());

        return new LightResource($light);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Light  $light
     * @return \App\Http\Resources\LightResource
     */
    public function show(Light $light)
    {
        //$this->authorize('view', $light);

        return new LightResource($light);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\LightRequest  $request
     * @param  \App\Models\Light  $light
     * @return \App\Http\Resources\LightResource
     */
    public function update(LightRequest $request, Light $light)
    {
        //$this->authorize('update', $light);

        $light->update($request->validated());

        return new LightResource($light);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Light  $light
     * @return \Illuminate\Http\Response
     */
    public function destroy(Light $light)
    {
        //$this->authorize('delete', $light);

        // $light->delete();

        //return new LightResource($light);

        return response('Light deletion is not allowed', 405);

    }
}
