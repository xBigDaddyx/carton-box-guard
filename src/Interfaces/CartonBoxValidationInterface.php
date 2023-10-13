<?php

namespace Teresa\CartonBoxGuard\Interfaces;

use Illuminate\Database\Eloquent\Model;

interface CartonBoxValidationInterface
{
<<<<<<< HEAD
    public function validateSolid($cartonBox, $polybag);
=======
    public function validateSolid(Model $cartonBox, string $current_polybag);
>>>>>>> 4861593 (fix model)

    public function validateRatio($cartonBox, $garmentLabel, $packingList, $polybag);
}
