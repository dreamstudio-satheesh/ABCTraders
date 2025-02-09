<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rack;
use App\Models\Shelf;

class RackSeeder extends Seeder
{
    public function run()
    {
        $racks = [
            [
                'rack_name'    => 'Rack A',
                'location'     => 'Ground Floor',
                'total_shelves'=> 10,
            ],
            [
                'rack_name'    => 'Rack B',
                'location'     => 'Ground  Floor',
                'total_shelves'=> 15,
            ],
            [
                'rack_name'    => 'Rack C',
                'location'     => 'First Floor',
                'total_shelves'=> 20,
            ],
        ];

        foreach ($racks as $data) {
            // Create the rack
            $rack = Rack::create($data);

            // Automatically create shelves for the rack
            for ($i = 1; $i <= $rack->total_shelves; $i++) {
                Shelf::create([
                    'rack_id'     => $rack->id,
                    'shelf_level' => $i,
                    'capacity'    => 250, // Set a default capacity (adjust as needed)
                ]);
            }
        }
    }
}
