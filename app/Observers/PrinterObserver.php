<?php

namespace App\Observers;
use App\Models\User;
use App\Models\Printer;

class PrinterObserver
{
    public function creating(Printer $printer): void
    {
        $creator = auth()->hasUser() ? auth()->user()->id : 0;
        $printer->created_by = $creator;
    }

    /**
     * Handle the Event "updatING" event.
     */
    public function updating(Printer $printer): void
    {
        $creator = auth()->user()->id;
        $printer->updated_by = $creator;
    }
    /**
     * Handle the Event "deleted" event.
     */
    public function deleted(Printer $printer): void
    {
        $creator = auth()->user()->id;
        $printer->deleted_by = $creator;
        $printer->update();
    }

    /**
     * Handle the Event "restored" event.
     */
    public function restored(Printer $printer): void
    {
        $creator = auth()->user()->id;
        
        $printer->deleted_by = null;
        $printer->updated_by = $creator;
        $printer->update();
    }
    /**
     * Handle the Event "force deleted" event.
     */
    public function forceDeleted(Printer $printer): void
    {
        $creator = auth()->user()->id;
        $printer->deleted_by = $creator;
        $printer->update();
    }
}