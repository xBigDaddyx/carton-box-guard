<?php

namespace Teresa\CartonBoxGuard\Services;

use Teresa\CartonBoxGuard\Interfaces\CartonBoxValidationInterface;

class CartonBoxValidationService implements CartonBoxValidationInterface
{
    public function validateSolid($cartonBox, $polybag)
    {
        if ($cartonBox->polybag !== $polybag) {
            return "Polybag tidak sesuai";
        }

        return null; // Validasi solid berhasil
    }

    public function validateRatio($cartonBox, $garmentLabel, $packingList, $polybag)
    {
        if ($cartonBox->garmentLabel !== $garmentLabel) {
            return "Garment tidak sesuai";
        }

        // Implementasikan validasi lain sesuai dengan aturan yang Anda sebutkan
    }
}
