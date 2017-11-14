<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourceTable extends Migration {

	public function up() {
		Schema::create('cource',
				function (Blueprint $table) {
					$table->increments('id');
					$table->string('name')->unique();
					$table->text('content', 500);
					
					$table->timestamps();
				});
	}

	public function down() {
		Schema::dropIfExists('cource');
	}
}
