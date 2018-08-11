<?php

use App\Models\Module;
use App\Models\NumberSeries;
use Illuminate\Database\Seeder;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Module::class, 1)->create([
            'code' => 'SI',
            'name' => 'Sales Invoice'
        ]);

        factory(Module::class, 1)->create([
            'code' => 'PO',
            'name' => 'Purchase Order'
        ]);

        NumberSeries::create([
            'code' => 'SI-2017',
            'module_code' => 'SI',
        ]);

        NumberSeries::create([
            'code' => 'SI-2018',
            'module_code' => 'SI',
        ]);

        NumberSeries::create([
            'code' => 'SI-2019',
            'module_code' => 'SI',
        ]);
    }
}
