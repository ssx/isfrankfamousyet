<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table)
		{
			$table->timestamps();
			$table->dateTime('created_at_twitter');
			$table->dateTime('last_login');

			$table->string('user_id')->primary();
			$table->string('username');
			$table->string('fullname');
			$table->string('oauth_token');
			$table->string('oauth_token_secret');
			$table->string('image_url');

			$table->integer('count_statuses');
			$table->integer('count_followers');
			$table->integer('count_following');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
