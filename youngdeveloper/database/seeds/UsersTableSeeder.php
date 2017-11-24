<?php
use Illuminate\Database\Seeder;
/*
 * use Illuminate\Database\Eloquent\Model;
 * use Models\User;
 */
use \Carbon\Carbon;
class UsersTableSeeder extends Seeder {
	
	public function run() {

		$name = array (
				'Sau Tất Cả',
				'Huy Gấu',
				'Bé Con'
		);
		
		$role = array (
				'admin',
				'author',
				'subscriber' 
		);
		
		$email = array (
				'ngochuy.mmt@gmail.com',
				'huy.phamngoc@nttdata.com',
				'sautatca@nttdata.com' 
		);
		
		$username = array (
				'huypn',
				'ngochuy',
				'sautatca'
		);
		
		for($x = 2; $x <= 4; $x ++) {
			$itemname = array_rand ( $name );
			$itememail = array_rand ( $email );
			$itemrole = array_rand ( $role );
			
			DB::table ( 'users' )->insert ( [ 
					'id' => $x,
					'name' => $name [$itemname],
					'username' =>  $username [$x-2],
					'email' => $email [$x-2],
					'role' => $role [$itemrole],
					'password' => bcrypt ( 'abc@123' ),
					'created_at' => Carbon::now () 
			] );
		}
		
		//Hash::make('hesnotmydad'),
		DB::table ( 'users' )->insert ([
				'id' => 1,
				'name' => 'admin',
				'username' => 'admin',
				'email' => 'admin@youngcoder.net',
				'role' => 'admin',
				'password' => bcrypt ( 'admin' ),
				'created_at' => Carbon::now ()
		]);
		
	}
}
