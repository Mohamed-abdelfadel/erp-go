<?php

namespace Database\Seeders;

use App\Models\ProductServiceUnit;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PlansTableSeeder::class);
        $this->call(ProductServiceCategorySeeder::class);
        $this->call(ProductServiceUnitsSeeder::class);
        $this->call(ProductServiceSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(InvoiceSeeder::class);
        $this->call(InvoiceProductSeeder::class);
        $this->call(LeadSeeder::class);
        $this->call(VenderSeeder::class);
        $this->call(BillSeeder::class);
        $this->call(BillProductSeeder::class);
    }
}
