<?php

namespace App\Policies;

use App\Models\Deceased_data;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class DeceasedDataPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        $role = Role::all()->find(auth()->user()->role_id);
        switch ($role->slug) {

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
    public function view(User $user): bool
    {
        $role = Role::all()->find(auth()->user()->role_id);
        switch ($role->slug) {

            case 'manager':
            case 'dev':
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
        $role = Role::all()->find(auth()->user()->role_id);
        switch ($role->slug) {

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
    public function update(User $user): bool
    {
        $role = Role::all()->find(auth()->user()->role_id);
        switch ($role->slug) {

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
    public function delete(User $user): bool
    {
        $role = Role::all()->find(auth()->user()->role_id);
        switch ($role->slug) {

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
    public function restore(User $user): bool
    {
        $role = Role::all()->find(auth()->user()->role_id);
        switch ($role->slug) {

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
    public function forceDelete(User $user): bool
    {
        $role = Role::all()->find(auth()->user()->role_id);
        switch ($role->slug) {

            case 'dev':
            case 'admin':
                return true;
            default:
                return false;
        }
    }
}

