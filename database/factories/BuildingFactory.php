<?php

namespace Database\Factories;

use App\Models\Building;
use Illuminate\Database\Eloquent\Factories\Factory;

class BuildingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Building::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
             'building_id' => $this->faker->uuid,
             'fmCode' => $this->faker->ean8,
             'contactName' => $this->faker->name ,
             'phone' => $this->faker->tollFreePhoneNumber ,
            'area' => $this->faker->tollFreePhoneNumber,
            'numberLayer' => $this->faker->randomDigit ,
            'floor' => $this->faker->randomDigit,
            'roomNumber' => $this->faker->randomDigit,
            'contract' => $this->faker->tollFreePhoneNumber,
            'contracttime' => $this->faker->tollFreePhoneNumber,
            'detailAdress' => $this->faker->address,
            'province' => $this->faker->country,
            'city' => $this->faker->country,
            'postalCode' => $this->faker->postcode,
            'zone' => $this->faker->tollFreePhoneNumber,
            'latitude' => $this->faker->latitude,
            'longtude' => $this->faker->longitude,
            'priceSquare' => $this->faker->tollFreePhoneNumber,
            'workingTime' => $this->faker->tollFreePhoneNumber,
            'blance' => $this->faker->tollFreePhoneNumber,
            'developer' => $this->faker->tollFreePhoneNumber,
            'grade' => $this->faker->tollFreePhoneNumber
        ];
    }
}