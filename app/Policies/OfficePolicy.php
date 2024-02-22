<?php

namespace App\Policies;

use App\Models\Office;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class OfficePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        switch (auth()->user()->role->slug) {

            case 'manager':
            case 'dev':
            case 'admin':
                return true;
            default:
                return false;
        }

    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Office $office): bool
    {
        switch (auth()->user()->role->slug) {

            case 'dev':
            case 'manager':
            case 'admin':
                return true;
            default:
                return false;
        }
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        switch (auth()->user()->role->slug) {

            case 'dev':
            case 'admin':
                return true;
            default:
                return false;
        }
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Office $office): bool
    {
        switch (auth()->user()->role->slug) {

            case 'dev':
            case 'admin':
                return true;
            default:
                return false;
        }
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Office $office): bool
    {
        switch (auth()->user()->role->slug) {

            case 'dev':
            case 'admin':
                return true;
            default:
                return false;
        }
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Office $office): bool
    {
        switch (auth()->user()->role->slug) {

            case 'dev':
            case 'admin':
                return true;
            default:
                return false;
        }
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Office $office): bool
    {
        switch (auth()->user()->role->slug) {

            case 'dev':
            case 'admin':
                return true;
            default:
                return false;
        }
    }


    public function checkOffice(User $user, Office $office){

    }
}
