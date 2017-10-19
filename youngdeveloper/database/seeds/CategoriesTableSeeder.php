<?php
use Illuminate\Database\Seeder;
use \Carbon\Carbon;
class CategoriesTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {

		$name = array (
				'Java',
				'Spring',
				'Libgdx',
				'Unity',
				'PHP' 
		);
		
		for($x = 1; $x <= 5; $x ++) {
			DB::table ( 'categories' )->insert ( [ 
					'id' => $x,
					'name' => $name [$x -1],
					'description' => $name [$x -1],
					'created_at' => Carbon::now()->format('Y-m-d H:i:s')
			] );
		}
	}
}
