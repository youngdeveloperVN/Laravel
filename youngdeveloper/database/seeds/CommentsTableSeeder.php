<?php
use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder {
	
	
	public function run() {
		
		 $comments = array (
				'Ok, good',
				'Nice',
				'Thanks for tutorial',
				'I have some questions',
				'Thanks, I like the posts'
				
		);
		 
		for($x = 1; $x <= 15; $x ++) {
			$itemComment = array_rand($comments);
			DB::table ( 'comments' )->insert ( [
					'id' => $x,
					'email' => 'ngochuy.mmt@gmail.com',
					'name' => 'Start Bootstrap',
					'idPost' => rand(1,15),
					'content' => $comments[$itemComment],
					'idParentComment' => rand(1,15)
			] );
		}
	}
}
