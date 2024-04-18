<?php

namespace App\Observers;

use App\Models\Schedule;

class ScheduleObserver
{
    /**
     * Handle the Schedule "created" event.
     */
    public function creating(Schedule $schedule): void
    {
        $creator = auth()->hasUser() ? auth()->user()->id : 0;
        $schedule->created_by = $creator;
    }

    /**
     * Handle the Event "updatING" event.
     */
    public function updating(Schedule $schedule): void
    {
        $creator = auth()->user()->id;
        $schedule->updated_by = $creator;
    }
    /**
     * Handle the Event "deleted" event.
     */
    public function deleted(Schedule $schedule): void
    {
        $creator = auth()->user()->id;
        $schedule->deleted_by = $creator;
        $schedule->update();
    }

    /**
     * Handle the Event "restored" event.
     */
    public function restored(Schedule $schedule): void
    {
        $creator = auth()->user()->id;
        
        $schedule->deleted_by = null;
        $schedule->updated_by = $creator;
        $schedule->update();
    }
    /**
     * Handle the Event "force deleted" event.
     */
    public function forceDeleted(Schedule $schedule): void
    {
        $creator = auth()->user()->id;
        
        $schedule->deleted_by = $creator;
        $schedule->update();
    }
}
