<?php

namespace Teresa\CartonBoxGuard\Observers;

use Teresa\CartonBoxGuard\Models\Polybag;

class PolybagObserver
{
    /**

     * Handle the Polybag "created" event.

     *

     * @param  \Teresa\CartonBoxGuard\Models\Polybag  $Polybag

     * @return void

     */

    public function created(Polybag $Polybag): void
    {
        $max_quantity = $polybag->cartonBox->quantity;

        $Polybag->unique_id = 'PR-' . $Polybag->id;

        $Polybag->save();
    }
}
