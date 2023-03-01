<?php

namespace App\Policies;

use App\Models\Humidity;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class HumidityPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any humidity.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the humidity.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Humidity  $humidity
     * @return mixed
     */
    public function view(User $user, Humidity $humidity)
    {
        //
    }

    /**
     * Determine whether the user can create humidity.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the humidity.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Humidity  $humidity
     * @return mixed
     */
    public function update(User $user, Humidity $humidity)
    {
        //
    }

    /**
     * Determine whether the user can delete the humidity.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Humidity  $humidity
     * @return mixed
     */
    public function delete(User $user, Humidity $humidity)
    {
        //
    }

    /**
     * Determine whether the user can restore the humidity.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Humidity  $humidity
     * @return mixed
     */
    public function restore(User $user, Humidity $humidity)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the humidity.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Humidity  $humidity
     * @return mixed
     */
    public function forceDelete(User $user, Humidity $humidity)
    {
        //
    }
}
