<?php

namespace Teresa\CartonBoxGuard\Repositories;

use App\Models\CartonBox;
use Teresa\CartonBoxGuard\Interfaces\CartonBoxValidationInterface;

class CartonBoxRepository
{
    protected $validationService;

    public function __construct(CartonBoxValidationInterface $validationService)
    {
        $this->validationService = $validationService;
    }

    public function validateSolid($cartonBox, $polybag)
    {
        return $this->validationService->validateSolid($cartonBox, $polybag);
    }

    public function validateRatio($cartonBox, $garmentLabel, $packingList, $polybag)
    {
        return $this->validationService->validateRatio($cartonBox, $garmentLabel, $packingList, $polybag);
    }

    // Implementasikan metode lain yang diperlukan untuk mengelola model CartonBox
}
