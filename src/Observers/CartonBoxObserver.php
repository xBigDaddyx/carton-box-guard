<?php

namespace Teresa\CartonBoxGuard\Observers;

use Teresa\CartonBoxGuard\Models\CartonBox;

class CartonBoxObserver
{
    /**
     * Handle the CartonBox "created" event.

     *

     * @param  \App\Models\CartonBox  $CartonBox
     */
    public function creating(CartonBox $CartonBox): void
    {

        $count = ($CartonBox::where('id', 'like', auth()->user()->company->short_name . '%')->withTrashed()->count() + 1);

        if ($count < 10) {
            $number = '00000' . $count;
        } elseif ($count >= 10 && $count < 100) {
            $number = '0000' . $count;
        } elseif ($count >= 100 && $count < 1000) {
            $number = '000' . $count;
        } elseif ($count >= 1000 && $count < 10000) {
            $number = '00' . $count;
        } elseif ($count >= 10000 && $count < 100000) {
            $number = '0' . $count;
        } else {
            $number = $count;
        }
        $CartonBox->company_id = auth()->user()->company->id;
        $CartonBox->id = auth()->user()->company->short_name . '.CB.' . $number;
    }

    /**
     * Handle the CartonBox "created" event.

     *

     * @param  \App\Models\CartonBox  $CartonBox
     */
    public function created(CartonBox $CartonBox): void
    {
    }

    /**
     * Handle the CartonBox "updated" event.

     *

     * @param  \App\Models\CartonBox  $CartonBox
     */
    public function updated(CartonBox $CartonBox): void
    {
    }

    /**
     * Handle the CartonBox "deleted" event.

     *

     * @param  \App\Models\CartonBox  $CartonBox
     */
    public function deleted(CartonBox $CartonBox): void
    {
    }

    /**
     * Handle the CartonBox "restored" event.

     *

     * @param  \App\Models\CartonBox  $CartonBox
     */
    public function restored(CartonBox $CartonBox): void
    {
    }

    /**
     * Handle the CartonBox "force deleted" event.

     *

     * @param  \App\Models\CartonBox  $CartonBox
     */
    public function forceDeleted(CartonBox $CartonBox): void
    {
    }
}
