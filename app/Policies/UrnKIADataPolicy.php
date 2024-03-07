<?php

namespace App\Policies;

use App\Models\Urn_k_i_a_data;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class UrnKIADataPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Urn_k_i_a_data $urnKIAData): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Urn_k_i_a_data $urnKIAData): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Urn_k_i_a_data $urnKIAData): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Urn_k_i_a_data $urnKIAData): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Urn_k_i_a_data $urnKIAData): bool
    {
        //
    }
}
