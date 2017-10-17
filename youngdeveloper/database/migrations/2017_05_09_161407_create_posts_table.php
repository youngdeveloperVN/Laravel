<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreatePostsTable extends Migration {
	public function up() {
		
		Schema::create ( 'posts', function (Blueprint $table) {
			$table->increments ( 'id' );
			$table->string ( 'title' )->unique ();
			$table->text ( 'content', 500 );
			$table->string ( 'thumbnail' );
			
			$table->integer ( 'idUser' )->unsigned ()->default ( 0 );
			$table->foreign ( 'idUser' )->references ( 'id' )->on ( 'users' )->onDelete ( 'cascade' );
			
			$table->integer ( 'idCategory' )->unsigned ()->default ( 0 );
			$table->foreign ( 'idCategory' )->references ( 'id' )->on ( 'categories' )->onDelete ( 'cascade' );
			
			$table->string ( 'slug' );
			
			// new
			$table->integer ( 'viewCount' )->default ( 0 );
			$table->boolean ( 'active' );
			
			$table->timestamps ();
		} );
    }
    
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
