<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	public function up() {
		Schema::create('posts',
				function (Blueprint $table) {
					$table->increments('id');
					$table->string('title')->unique();
					$table->text('content', 500);
					
					$table->integer('idCategory')
						->unsigned()
						->default(0);
					
					$table->foreign('idCategory')
						->references('id')
						->on('categories')
						->onDelete('cascade');
					
					$table->integer('idCource')
						->unsigned()
						->default(0);
						
					$table->foreign('idCource')
						->references('id')
						->on('cource')
						->onDelete('cascade');
					
					$table->integer('idTranscript')
						->unsigned()
						->default(0);
						
					$table->foreign('idTranscript')
						->references('id')
						->on('transcript')
						->onDelete('cascade');
					// new
					$table->integer('viewCount')->default(0);
					$table->boolean('active')->default(true);
					
					$table->timestamps();
				});
	}

	public function down() {
		Schema::dropIfExists('posts');
	}
}
