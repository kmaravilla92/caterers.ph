<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id');
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
        Schema::dropIfExists('customer_jobs');
    }
}
