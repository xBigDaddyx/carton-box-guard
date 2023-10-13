<?php

namespace Teresa\CartonBoxGuard\Interfaces;

interface CartonBoxValidationInterface
{

    public function validateSolid($cartonBox, $polybag);

    public function validateRatio($cartonBox, $garmentLabel, $packingList, $polybag);
}
