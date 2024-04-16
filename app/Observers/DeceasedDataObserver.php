<?php

namespace App\Observers;

use App\Models\Deceased_data;

class DeceasedDataObserver
{
    /**
     * Handle the Deceased_data "created" event.
     */
    public function creating(Deceased_data $deceased): void
    {
        $creator = auth()->hasUser() ? auth()->user()->id : 0;
        $deceased->created_by = $creator;
    }

    /**
     * Handle the Event "updatING" event.
     */
    public function updating(Deceased_data $deceased): void
    {
        $creator = auth()->user()->id;
        $deceased->updated_by = $creator;
    }
    /**
     * Handle the Event "deleted" event.
     */
    public function deleted(Deceased_data $deceased): void
    {
        $creator = auth()->user()->id;
        $deceased->deleted_by = $creator;
        $deceased->update();
    }

    /**
     * Handle the Event "restored" event.
     */
    public function restored(Deceased_data $deceased): void
    {
        $creator = auth()->user()->id;
        
        $deceased->deleted_by = null;
        $deceased->updated_by = $creator;
        $deceased->update();
    }
    /**
     * Handle the Event "force deleted" event.
     */
    public function forceDeleted(Deceased_data $deceased): void
    {
        $creator = auth()->user()->id;
        
        $deceased->deleted_by = $creator;
        $deceased->update();
    }
}
