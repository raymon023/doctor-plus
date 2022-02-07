<?php

namespace Database\Factories;

use App\Models\Medico;
use Illuminate\Database\Eloquent\Factories\Factory;

class MedicoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Medico::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' =>$this->faker->name() ,
            'apellido' =>$this->faker->lastName() ,
            'cedula' =>$this->faker->numberBetween(1,200),
            'direccion' =>$this->faker->address() ,
            'telefono' =>$this->faker->phoneNumber() ,
            'especialidad' =>$this->faker->name()
        ];
    }
}
