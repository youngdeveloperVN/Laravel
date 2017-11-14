<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFatherCategoryTable extends Migration {

	public function up() {
		Schema::create('fathercategories',
				function (Blueprint $table) {
					$table->increments('id');
					$table->string('name')->unique();
					$table->timestamps();
				});
	}

	public function down() {
		Schema::dropIfExists('fathercategories');
	}
}
