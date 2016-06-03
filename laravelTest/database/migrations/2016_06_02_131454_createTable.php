<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hotels', function(Blueprint $table)
		{
                        $table->increments('id');
			$table->string('name')->default('');
                        $table->string('city')->default('');	
                        $table->timestamps();
		});
                
                Schema::create('comments', function(Blueprint $table)
		{
                        $table->increments('id');
                        $table->integer('hotelid')->unsigned()->default(0);
                        $table->integer('userid')->unsigned()->default(0);
			$table->string('comments')->default('');
                        $table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('hotels');	
                Schema::drop('comments');
	}

}
