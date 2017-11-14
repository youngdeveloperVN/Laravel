<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryTable extends Migration {

	public function up() {
		Schema::create('categories',
				function (Blueprint $table) {
					
					$table->increments('id');
					$table->string('name')->unique();
					$table->string('description');
					
					$table->integer('idFatherCategory')
						->unsigned()
						->default(0);
					
					$table->foreign('idFatherCategory')
						->references('id')
						->on('fathercategories')
						->onDelete('cascade');
					
					$table->timestamps();
				});
	}

	public function down() {
		Schema::drop('categories');
	}
}
