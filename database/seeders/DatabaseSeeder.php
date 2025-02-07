<?php

namespace Database\Seeders;

use App\Models\Toll;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Type;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Toll::create([
            "name" => "AP-46, Alto de las Pedrizas",
            "city" => "Málaga",
            "collection" => 0
        ]);

        Toll::create([
            "name" => "AP-66, Campomanes",
            "city" => "León",
            "collection" => 0
        ]);

        Type::create([
            "type" => "car",
            "price" => 100
        ]);

        Type::create([
            "type" => "motorcycle",
            "price" => 50
        ]);

        Type::create([
            "type" => "2 axle truck",
            "price" => 100
        ]);

        Type::create([
            "type" => "3 axle truck",
            "price" => 150
        ]);

        Type::create([
            "type" => "4 axle truck",
            "price" => 200
        ]);

        Type::create([
            "type" => "5 axle truck",
            "price" => 250
        ]);

        Type::create([
            "type" => "6 axle truck",
            "price" => 300
        ]);

        $car = Vehicle::create([
            "type_id" => 1,
            "license" => "1234ABC",
            "total_expenses" => 0
        ]);

        $motorcycle = Vehicle::create([
            "type_id" => 2,
            "license" => "5678DEF",
            "total_expenses" => 0
        ]);

        $truck1 = Vehicle::create([
            "type_id" => 3,
            "license" => "9876GHI",
            "total_expenses" => 0
        ]);

        $truck2 = Vehicle::create([
            "type_id" => 4,
            "license" => "5432JKL",
            "total_expenses" => 0
        ]);

        $truck3 = Vehicle::create([
            "type_id" => 5,
            "license" => "1098MNO",
            "total_expenses" => 0
        ]);

        $truck4 = Vehicle::create([
            "type_id" => 6,
            "license" => "7654PQR",
            "total_expenses" => 0
        ]);
    }
}
