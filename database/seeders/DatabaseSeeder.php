<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Product;
use App\Models\Review;
use App\Models\User;
use Carbon\Carbon;
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
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@google.com',
            'role' => 'super-admin',
            'password' => bcrypt('12345678')
        ]);

        User::create([
            'name' => 'abdullah',
            'username' => 'abdullah',
            'email' => 'abdullah@google.com',
            'role' => 'admin',
            'password' => bcrypt('12345678')
        ]);


        Company::create([
            'name' => 'PT.Indofood',
            'url_website' => 'www.indofood.com',
        ]);

        Company::create([
            'name' => 'PT.Unilever',
            'url_website' => 'www.unilever.com',
        ]);

        Product::create([
            'company_id' => 1,
            'name' => 'Indomie Goreng',
            'is_halal' => 'yes',
            'ingredients' => 'tepung, minyak, bawang, dll',
            'expire_date' => Carbon::create('2021', '12', '11'),
            'certification_number' => 'xxxx',
            'image' => 'default.jpg',
        ]);

        Product::create([
            'company_id' => 1,
            'name' => 'Indomie Goreng Rendang',
            'is_halal' => 'yes',
            'ingredients' => 'tepung, minyak, bawang, dll',
            'expire_date' => Carbon::create('2021', '12', '11'),
            'certification_number' => 'xxxx',
            'image' => 'default1.jpg',
        ]);

        Review::create([
            'user_id' => 1,
            'product_id' => 1,
            'content' => 'ini adalah makanan halal guys',
            'url_source' => 'www.google.com',
            'image' => 'default.jpg'
        ]);

        Review::create([
            'user_id' => 1,
            'product_id' => 2,
            'content' => 'ini adalah makanan halal guys',
            'url_source' => 'www.google.com',
            'image' => 'default.jpg'
        ]);
    }
}
