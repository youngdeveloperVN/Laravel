<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration {

	public function up() {
		Schema::create('comments',
				function (Blueprint $table) {
					
					// id, on_blog, from_user, body, at_time
					$table->increments('id');
					
					$table->integer('idPost')
						->unsigned()
						->default(0);
					$table->foreign('idPost')
						->references('id')
						->on('posts')
						->onDelete('cascade');
					
					$table->text('email')->nullable();
					$table->text('name');
					$table->text('website')->nullable();
					
					$table->text('content');
					
					$table->text('idParentComment');
					
					$table->timestamps();
				});
	}

	public function down() {
		Schema::dropIfExists('comments');
	}
}
