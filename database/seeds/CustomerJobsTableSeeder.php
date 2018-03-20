<?php

use Illuminate\Database\Seeder;
use App\Data\Models\CustomerJob;
use App\Data\Models\CustomerJobApplication;
use App\Data\Models\User;

class CustomerJobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(CustomerJob::class, 5)
            ->create()
            ->each(function($customer_job) {
                $customer = User::inRandomOrder()->first();
                $customer_job->customer_id = $customer->id;
                $customer_job->save();

                $customer_job
                    ->Applications()
                    ->saveMany(
                        factory(CustomerJobApplication::class, 5)->make()
                    );
            });
    }
}
