<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatererServiceLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caterer_service_leads', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('inquirer_id')->default(0);
            $table->integer('caterer_service_id');
            $table->string('inquirer_name');
            $table->string('inquirer_email');
            $table->string('inquirer_number');
            $table->string('title');
            $table->text('content');
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
        Schema::dropIfExists('caterer_service_leads');
    }
}
