<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSettingsTable extends Migration {

	public function up()
	{
		Schema::create('settings', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('phone');
			$table->string('email');
			$table->string('facebook');
			$table->string('twitter');
			$table->string('instagram');
			$table->string('youtube');
			$table->string('about_app');
			$table->string('notification_text');
		});
	}

	public function down()
	{
		Schema::drop('settings');
	}
}