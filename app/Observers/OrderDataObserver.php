<?php

namespace App\Observers;

use App\Models\OrderData;

class OrderDataObserver
{
    /**
     * Handle the OrderData "created" event.
     */
    public function creating(OrderData $order): void
    {
        $creator = auth()->hasUser() ? auth()->user()->id : 0;
        $order->created_by = $creator;
    }

    /**
     * Handle the Event "updatING" event.
     */
    public function updating(OrderData $order): void
    {
        $creator = auth()->user()->id;
        $order->updated_by = $creator;
    }
    /**
     * Handle the Event "deleted" event.
     */
    public function deleted(OrderData $order): void
    {
        $creator = auth()->user()->id;
        $order->deleted_by = $creator;
        $order->update();
    }

    /**
     * Handle the Event "restored" event.
     */
    public function restored(OrderData $order): void
    {
        $creator = auth()->user()->id;
        
        $order->deleted_by = null;
        $order->updated_by = $creator;
        $order->update();
    }
    /**
     * Handle the Event "force deleted" event.
     */
    public function forceDeleted(OrderData $order): void
    {
        $creator = auth()->user()->id;
        
        $order->deleted_by = $creator;
        $order->update();
    }
}
