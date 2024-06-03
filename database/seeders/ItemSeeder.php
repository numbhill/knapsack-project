<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemSeeder extends Seeder
{
    public function run()
    {
        Item::create(['name' => 'Item 1', 'value' => 60, 'weight' => 10]);
        Item::create(['name' => 'Item 2', 'value' => 100, 'weight' => 20]);
        Item::create(['name' => 'Item 3', 'value' => 120, 'weight' => 30]);
    }
}
