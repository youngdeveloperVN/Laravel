<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTranscriptTable extends Migration {

	public function up() {
		Schema::create('transcript',
				function (Blueprint $table) {
					$table->increments('id');
					$table->text('content', 500);
					$table->timestamps();
				});
	}

	public function down() {
		Schema::dropIfExists('transcript');
	}
}
