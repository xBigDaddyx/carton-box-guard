<?php

namespace Teresa\CartonBoxGuard\Observers;

use Teresa\CartonBoxGuard\Models\Polybag;

class PolybagObserver
{
    /**
     * Handle the Polybag "created" event.
     */
    public function created(Polybag $Polybag): void
    {
        $max_quantity = $polybag->cartonBox->quantity;

        $Polybag->unique_id = 'PR-'.$Polybag->id;

        $Polybag->save();
    }
}
