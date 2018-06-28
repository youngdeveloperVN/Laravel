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
				'Huy Gấu'
				
		);
		
		$role = array (
				'admin',
				'default'
		);
		
		$email = array (
				'ngochuy.mmt@gmail.com',
				'huy.phamngoc@nttdata.com'
		);
		
		$username = array (
				'huypn',
				'ngochuy'
		);
		
		for($x = 1; $x <= 2; $x ++) {
			DB::table ( 'users' )->insert ( [ 
					'id' => $x,
					'name' => $name [$x-1],
					'username' =>  $username [$x-1],
					'email' => $email [$x-1],
					'type' => $role [$x-1],
					'password' => bcrypt ( '123456' ),
					'created_at' => Carbon::now () 
			] );
		}
	}
}
