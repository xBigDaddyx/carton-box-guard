<?php

namespace Teresa\CartonBoxGuard\Services;

use Illuminate\Database\Eloquent\Model;
use Teresa\CartonBoxGuard\Interfaces\CartonBoxValidationInterface;
use Teresa\CartonBoxGuard\Models\Polybag;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Support\Facades\Auth;

class CartonBoxValidationService implements CartonBoxValidationInterface
{
    public function validateSolid(Model $cartonBox, string $current_polybag)
    {
        if ($cartonBox->is_completed !== true) {
            if (!empty($cartonBox->polybags->first()->polybag_code)) {
                if ($current_polybag !== $cartonBox->polybags->first()->polybag_code) {
                    return 'Polybag tidak sesuai';
                }
            }
            $id = IdGenerator::generate(['table' => 'polybags', 'length' => 15, 'prefix' => Auth::user()->company->id . '.PB.']);
            //output: INV-000001
            $value = new Polybag(['polybag_code' => $current_polybag, 'id' => $id]);

            $cartonBox->polybags()->save($value);

            return 'Polybag ' . $current_polybag . ' berhasil ditambahkan, lanjutkan'; // Validasi solid berhasil
        }

        return 'carton box completed.';
    }

    public function validateRatio($cartonBox, $garmentLabel, $packingList, $polybag)
    {
        if ($cartonBox->garmentLabel !== $garmentLabel) {
            return 'Garment tidak sesuai';
        }

        // Implementasikan validasi lain sesuai dengan aturan yang Anda sebutkan
    }
}
