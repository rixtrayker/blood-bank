<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDonationRequestsTable extends Migration {

	public function up()
	{
		Schema::create('donation_requests', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('client_id')->unsigned();
			$table->string('patient_name');
			$table->string('patient_age');
			$table->integer('blood_type_id')->unsigned();
			$table->integer('bags_num');
			$table->string('hospital_address');
			$table->integer('city_id')->unsigned();
			$table->decimal('latitude', 10,8);
			$table->decimal('longitude', 10,8);
			$table->string('phones');
			$table->string('notes');
		});
	}

	public function down()
	{
		Schema::drop('donation_requests');
	}
}