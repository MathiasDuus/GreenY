<?php

namespace App\Http\Controllers;

use App\Models\FirstTimeSetup;
use App\Http\Resources\FirstTimeSetupResource;
use Illuminate\Routing\Controller;
use App\Http\Requests\FirstTimeSetupRequest;
use App\Http\Resources\Collections\FirstTimeSetupCollection;

class FirstTimeSetupControllerAPI extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FirstTimeSetup  $firstTimeSetup
     * @return
     */
    public function location_type(FirstTimeSetup $firstTimeSetup)
    {
        $location_id = request('location_id');
        $sensor_type = request('sensor_type');

        $search = FirstTimeSetup::where('location_id', 'like', "%{$location_id}%")
            ->Where('sensor_type', 'like', "%{$sensor_type}%")
            ->get();

        return response()->json([
            'data' => $search
        ]);

    }

    /**
     * Display a listing of the resource.
     *
     * @return FirstTimeSetupCollection
     */
    public function index()
    {
        //$this->authorize('viewAny', FirstTimeSetup::class);

        $firstTimeSetup = FirstTimeSetup::all();

        return new FirstTimeSetupCollection($firstTimeSetup);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\FirstTimeSetupRequest  $request
     * @return \App\Http\Resources\FirstTimeSetupResource
     */
    public function store(FirstTimeSetupRequest $request)
    {
        //$this->authorize('create', FirstTimeSetup::class);

        $firstTimeSetup = FirstTimeSetup::create($request->validated());

        return new FirstTimeSetupResource($firstTimeSetup);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FirstTimeSetup  $firstTimeSetup
     * @return \App\Http\Resources\FirstTimeSetupResource
     */
    public function show(FirstTimeSetup $firstTimeSetup)
    {
        //$this->authorize('view', $firstTimeSetup);

        return new FirstTimeSetupResource($firstTimeSetup);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\FirstTimeSetupRequest  $request
     * @param  \App\Models\FirstTimeSetup  $firstTimeSetup
     * @return \App\Http\Resources\FirstTimeSetupResource
     */
    public function update(FirstTimeSetupRequest $request, FirstTimeSetup $firstTimeSetup)
    {
        //$this->authorize('update', $firstTimeSetup);

        $firstTimeSetup->update($request->validated());

        return new FirstTimeSetupResource($firstTimeSetup);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FirstTimeSetup  $firstTimeSetup
     * @return \Illuminate\Http\Response
     */
    public function destroy(FirstTimeSetup $firstTimeSetup)
    {
        //$this->authorize('delete', $firstTimeSetup);

        //$firstTimeSetup->delete();

        // return new FirstTimeSetupResource($firstTimeSetup);


        return response('FirstTimeSetup deletion is not allowed', 405);
    }
}
