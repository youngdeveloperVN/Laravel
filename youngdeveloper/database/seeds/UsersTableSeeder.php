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
		
		for($x = 1; $x <= 3; $x ++) {
			$itemname = array_rand ( $name );
			$itememail = array_rand ( $email );
			$itemrole = array_rand ( $role );
			
			DB::table ( 'users' )->insert ( [ 
					'id' => $x,
					'name' => $name [$itemname],
					'email' => $email [$x-1],
					'role' => $role [$itemrole],
					'password' => bcrypt ( 'secret' ),
					'created_at' => Carbon::now () 
			] );
		}
	}
}
