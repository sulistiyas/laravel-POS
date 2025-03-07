<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Supplier;
use App\Models\ProductCategory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('password'),
        ]);

        $cust = [
            [
                'name' => 'John Doe',
                'email' => 'john@mail.com',
                'phone' => '1234567890',
                'address_customer' => '123 Main St, New York, NY',
                'status' => 'active',
                'created_by' => 1,
            ],
            [
                'name' => 'Jane Doe',
                'email' => 'jane@mail.com',
                'phone' => '0987654321',
                'address_customer' => '456 Main St, New York, NY',
                'status' => 'active',
                'created_by' => 1,
            ],
            [
                'name' => 'Alice',
                'email' => 'alice@mail.com',
                'phone' => '1231231234',
                'address_customer' => '789 Main St, New York, NY',
                'status' => 'active',
                'created_by' => 1,
            ]
        ];

        $proCat = [
            [
                'name' => 'Electronics',
                'description' => 'Electronic devices and accessories',
                'status' => 'active',
                'created_by' => 1,
            ],
            [
                'name' => 'Clothing',
                'description' => 'Clothing and apparel',
                'status' => 'active',
                'created_by' => 1,
            ],
            [
                'name' => 'Books',
                'description' => 'Books and literature',
                'status' => 'active',
                'created_by' => 1,
            ]
        ];

        $pro = [
                    [
                        'name' => 'Laptop',
                        'description' => 'Laptop computer',
                        'price' => 1000,
                        'id_product_category' => 1,
                        'stock' => 10,
                        'created_by' => 1,
                    ],
                    [
                        'name' => 'T-shirt',
                        'description' => 'Plain white t-shirt',
                        'price' => 10,
                        'id_product_category' => 2,
                        'stock' => 100,
                        'created_by' => 1,
                    ],
                    [
                        'name' => 'Book',
                        'description' => 'Novel',
                        'price' => 20,
                        'id_product_category' => 3,
                        'stock' => 50,
                        'created_by' => 1,
                    ],
                    [
                        'name' => 'Smartphone',
                        'description' => 'Smartphone device',
                        'price' => 500,
                        'id_product_category' => 1,
                        'stock' => 20,
                        'created_by' => 1,
                    ],
                    [
                        'name' => 'Jeans',
                        'description' => 'Blue jeans',
                        'price' => 50,
                        'id_product_category' => 2,
                        'stock' => 75,
                        'created_by' => 1,
                    ],
                    [
                        'name' => 'Magazine',
                        'description' => 'Monthly magazine',
                        'price' => 5,
                        'id_product_category' => 3,
                        'stock' => 100,
                        'created_by' => 1,
                    ],
                    [
                        'name' => 'Tablet',
                        'description' => 'Tablet device',
                        'price' => 300,
                        'id_product_category' => 1,
                        'stock' => 15,
                        'created_by' => 1,
                    ],
                    [
                        'name' => 'Dress',
                        'description' => 'Black dress',
                        'price' => 75,
                        'id_product_category' => 2,
                        'stock' => 50,
                        'created_by' => 1,
                    ],
                    [
                        'name' => 'Dictionary',
                        'description' => 'English dictionary',
                        'price' => 15,
                        'id_product_category' => 3,
                        'stock' => 25,
                        'created_by' => 1,
                    ]
        ];
        
        $sup = [
            [
                'name' => 'Supplier 1',
                'address' => '123 Supplier St, New York, NY',
                'phone' => '1234567890',
                'email' => 'sup1@mail.com',
                'id_product' => 1,
                'created_by' => 1,
            ],
            [
                'name' => 'Supplier 2',
                'address' => '456 Supplier St, New York, NY',
                'phone' => '0987654321',
                'email' => 'sup2@mail.com',
                'id_product' => 2,
                'created_by' => 1,
            ],
            [
                'name' => 'Supplier 3',
                'address' => '789 Supplier St, New York, NY',
                'phone' => '1231231234',
                'email' => 'sup3@mail.com',
                'id_product' => 3,
                'created_by' => 1,
            ],
            [
                'name' => 'Supplier 4',
                'address' => '1234 Supplier St, New York, NY',
                'phone' => '4321432143',
                'email' => 'sup4@mail.com',
                'id_product' => 4,
                'created_by' => 1,
            ],
            [
                'name' => 'Supplier 5',
                'address' => '567 Supplier St, New York, NY',
                'phone' => '5675675678',
                'email' => 'sup5@mail.com',
                'id_product' => 5,
                'created_by' => 1,
            ],
            [
                'name' => 'Supplier 6',
                'address' => '890 Supplier St, New York, NY',
                'phone' => '8908908901',
                'email' => 'sup6@mail.com',
                'id_product' => 6,
                'created_by' => 1,
            ],
        ];

        $cust = DB::table('customers')->insert($cust);
        $proCat = DB::table('product_categories')->insert($proCat);
        $pro = DB::table('products')->insert($pro);
        $sup = DB::table('suppliers')->insert($sup);
    }
}
