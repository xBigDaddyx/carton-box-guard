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

<<<<<<< HEAD
    public function validateCarton($box_code)
=======
    public function validateCarton(string $box_code)
>>>>>>> 4861593 (fix model)
    {
        return $this->model = $this->model->where('box_code', $box_code)->first();
    }
<<<<<<< HEAD

    public function validateSolid($cartonBox, $polybag)
=======
    public function validatePolybag($current_polybag)
>>>>>>> 4861593 (fix model)
    {
        if ($this->model->type === 'SOLID') {
            return $this->validateSolid($current_polybag);
        }
        return 'Selain SOLID';
    }
    public function validateSolid($current_polybag)
    {

        return $this->validationService->validateSolid($this->model, $current_polybag);
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
