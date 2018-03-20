<?php

use Illuminate\Database\Seeder;
use App\Data\Models\CatererService;
use App\Data\Models\CatererServiceLead;
use App\Data\Models\User;

class CatererServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(CatererService::class, 5)
            ->create()
            ->each(function($caterer_service) {
                $caterer = User::inRandomOrder()->first();
                $caterer_service->caterer_id = $caterer->id;
                $caterer_service->save();

                $caterer_service
                    ->Leads()
                    ->saveMany(
                        factory(CatererServiceLead::class, 5)->make()
                    );
            });
    }
}
