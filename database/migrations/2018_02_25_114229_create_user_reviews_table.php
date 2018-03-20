<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->float('rate', 1, 1);
            $table->text('content');
            $table->integer('by_user_id');
            $table->integer('for_user_id');
            $table->string('for_content_type');
            $table->integer('for_content_id');
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
        Schema::dropIfExists('user_reviews');
    }
}
