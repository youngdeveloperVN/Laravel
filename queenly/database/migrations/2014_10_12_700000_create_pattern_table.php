<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatternTable extends Migration {

	public function up() {
		Schema::create('patterns',
				function (Blueprint $table) {
					$table->increments('id');
					$table->text('pathfile', 500);
					
					$table->integer('idPost')
						->unsigned()
						->default(0);
					
					$table->foreign('idPost')
						->references('id')
						->on('posts')
						->onDelete('cascade');
					$table->timestamps();
				});
	}

	public function down() {
		Schema::dropIfExists('patterns');
	}
}
