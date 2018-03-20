<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatererServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caterer_services', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('caterer_id');
            $table->string('title');
            $table->text('description');
            $table->enum('status', ['0', '1']); // 0 = inactive, 1 = active
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('caterer_services');
    }
}
