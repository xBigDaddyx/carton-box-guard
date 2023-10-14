<?php

namespace Teresa\CartonBoxGuard\Traits;

use Illuminate\Support\Facades\Auth;

trait HasStringId
{
    public static function bootHasStringId()
    {
        static::creating(function ($model) {
            $settings = $model->prefixable();
            $count = ($model::where('id', 'like', Auth::user()->company->short_name . '%')->withTrashed()->count() + 1);

            if ($count < 10) {
                $number = '000000' . $count;
            } elseif ($count >= 10 && $count < 100) {
                $number = '00000' . $count;
            } elseif ($count >= 100 && $count < 1000) {
                $number = '0000' . $count;
            } elseif ($count >= 1000 && $count < 10000) {
                $number = '000' . $count;
            } elseif ($count >= 10000 && $count < 100000) {
                $number = '00' . $count;
            } elseif ($count >= 100000 && $count < 1000000) {
                $number = '0' . $count;
            } else {
                $number = $count;
            }
            $model->company_id = Auth::user()->company->id;
            $model->id = Auth::user()->company->short_name . '.' . $settings['id_prefix'] . '.' . $number;
        });
    }

    abstract public function prefixable(): array;
}
