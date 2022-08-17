<?php

namespace Database\Seeders;


use App\Models\Userrole;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Faker\Generator;
use Illuminate\Container\Container;

class DatabaseSeeder extends Seeder
{
    /**
     * The current Faker instance.
     *
     * @var \Faker\Generator
     */
    protected $faker;

    /**
     * Create a new seeder instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->faker = $this->withFaker();
    }
    
     /**
     * Get a new Faker instance.
     *
     * @return \Faker\Generator
     */
    protected function withFaker()
    {
        return Container::getInstance()->make(Generator::class);
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()


    {
        $this->call([
            UserRoleseeder::class,
            CreateAdminSeeder::class
        ]);

        for ($i=0;$i<=20;$i++){
            DB::table('users')->insert([
                'name' => $this->faker->name(),
                'email' => $this->faker->unique()->safeEmail(),
                'password' => Hash::make('password'),
                'role_id' => rand(3,Userrole::count())
            ]);
        }
    }
}
