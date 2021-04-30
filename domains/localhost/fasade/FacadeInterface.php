<?php
declare(strict_types=1);

namespace Facade {


    interface FacadeInterface
    {
        public function fetch(int $fdcId): FoodNutrientDataInterface;

    }
}