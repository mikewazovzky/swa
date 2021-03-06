<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->increments('id');			
			$table->integer('user_id')->unsigned();
			$table->string('title');
			$table->text('description');
			$table->string('page')->nullable();
			$table->string('image')->nullable();			
            $table->timestamps();
			$table->timestamp('published_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			
			$table->foreign('user_id')
				  ->references('id')
				  ->on('users')
				  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locations');
    }
}
