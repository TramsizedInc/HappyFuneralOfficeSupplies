<?php

namespace App\Policies;

use App\Models\PrinterType;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class PrinterTypePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
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
     * Determine whether the user can view the model.
     */
    public function view(User $user, PrinterType $printerType): bool
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
    public function update(User $user, PrinterType $printerType): bool
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
    public function delete(User $user, PrinterType $printerType): bool
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
    public function restore(User $user, PrinterType $printerType): bool
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
    public function forceDelete(User $user, PrinterType $printerType): bool
    {
        switch (auth()->user()->role->slug) {
            case 'dev':
            case 'admin':
                return true;
            default:
                return false;
        }
    }
}
