<?php

namespace Teresa\CartonBoxGuard\Services;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;
use Teresa\CartonBoxGuard\Interfaces\CartonBoxValidationInterface;

class CartonBoxValidationService implements CartonBoxValidationInterface
{

    public function validateSolid(Model $cartonBox, string $current_polybag)
    {
<<<<<<< HEAD
    }

    public function validateSolid($cartonBox, $polybag)
    {
        if ($cartonBox->polybag !== $polybag) {
            return 'Polybag tidak sesuai';
=======

        if (count($cartonBox->polybags) > 0) {
            if ($current_polybag !== $cartonBox->polybags->first()->polybag_code) {
                return 'Polybag tidak sesuai';
            }
>>>>>>> 4861593 (fix model)
        }

        //insert polybag
        return 'Polybag ' . $current_polybag . ' berhasil ditambahkan, lanjutkan'; // Validasi solid berhasil

    }

    public function validateRatio($cartonBox, $garmentLabel, $packingList, $polybag)
    {
        if ($cartonBox->garmentLabel !== $garmentLabel) {
            return 'Garment tidak sesuai';
        }

        // Implementasikan validasi lain sesuai dengan aturan yang Anda sebutkan
    }
}