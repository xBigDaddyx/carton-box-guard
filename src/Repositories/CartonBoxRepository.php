<?php

namespace Teresa\CartonBoxGuard\Repositories;

use App\Models\CartonBox;
use Illuminate\Support\Facades\Config;
use Teresa\CartonBoxGuard\Interfaces\CartonBoxValidationInterface;

class CartonBoxRepository
{
    protected $validationService;
    protected $model;

    public function __construct(CartonBoxValidationInterface $validationService)
    {
        $this->validationService = $validationService;
        $this->model = $this->getModel();
    }
    public function validateCarton($box_code)
    {
        return $this->model->where('box_code', $box_code);
    }
    public function validateSolid($cartonBox, $polybag)
    {
        return $this->validationService->validateSolid($cartonBox, $polybag);
    }

    public function validateRatio($cartonBox, $garmentLabel, $packingList, $polybag)
    {
        return $this->validationService->validateRatio($cartonBox, $garmentLabel, $packingList, $polybag);
    }
    public function getModel()
    {
        return resolve(Config::get('carton-box-guard.model'));
    }
    // Implementasikan metode lain yang diperlukan untuk mengelola model CartonBox
}
