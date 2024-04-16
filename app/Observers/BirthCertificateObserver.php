<?php

namespace App\Observers;

use App\Models\BirthCertificate;

class BirthCertificateObserver
{
    /**
     * Handle the BirthCertificate "created" event.
     */
    public function created(BirthCertificate $birthCertificate): void
    {
        //
        $creator = auth()->hasUser() ? auth()->user()->id : 0;
        $$birthCertificate->created_by = $creator;
    }

    /**
     * Handle the BirthCertificate "updated" event.
     */
    public function updated(BirthCertificate $birthCertificate): void
    {
        //
        $creator = auth()->user()->id;
        $birthCertificate->updated_by = $creator;
    }

    /**
     * Handle the BirthCertificate "deleted" event.
     */
    public function deleted(BirthCertificate $birthCertificate): void
    {
        //
        $creator = auth()->user()->id;
        $birthCertificate->deleted_by = $creator;
        $birthCertificate->update();
    }

    /**
     * Handle the BirthCertificate "restored" event.
     */
    public function restored(BirthCertificate $birthCertificate): void
    {
        //
        $creator = auth()->user()->id;
        
        $birthCertificate->deleted_by = null;
        $birthCertificate->updated_by = $creator;
        $birthCertificate->update();
    }

    /**
     * Handle the BirthCertificate "force deleted" event.
     */
    public function forceDeleted(BirthCertificate $birthCertificate): void
    {
        //
        $creator = auth()->user()->id;
        
        $birthCertificate->deleted_by = $creator;
        $birthCertificate->update();
    }
}
