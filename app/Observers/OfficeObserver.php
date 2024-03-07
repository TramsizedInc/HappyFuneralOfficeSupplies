<?php

namespace App\Observers;
use App\Models\User;
use App\Models\Office;

class OfficeObserver
{
    public function creating(Office $office): void
    {
        $creator = auth()->hasUser() ? auth()->user()->id : 0;
        $office->created_by = $creator;
    }

    /**
     * Handle the Event "updatING" event.
     */
    public function updating(Office $office): void
    {
        $creator = auth()->user()->id;
        $office->updated_by = $creator;
    }
    /**
     * Handle the Event "deleted" event.
     */
    public function deleted(Office $office): void
    {
        $creator = auth()->user()->id;
        $office->deleted_by = $creator;
        $office->update();
    }

    /**
     * Handle the Event "restored" event.
     */
    public function restored(Office $office): void
    {
        $creator = auth()->user()->id;
        
        $office->deleted_by = null;
        $office->updated_by = $creator;
        $office->update();
    }
    /**
     * Handle the Event "force deleted" event.
     */
    public function forceDeleted(Office $office): void
    {
        $creator = auth()->user()->id;
        
        $office->deleted_by = $creator;
        $office->update();
    }
}
