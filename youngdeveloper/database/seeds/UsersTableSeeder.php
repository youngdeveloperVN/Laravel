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
				'Admin',
				'HuyPN'
		);
		
		$role = array (
				'admin',
				'author'
		);
		
		$email = array (
				'ngochuy.mmt@gmail.com',
				'huy.phamngoc@nttdata.com',
		);
		
		$username = array (
				'admin',
				'huypn',
		);
		
		for($x = 0; $x < 2; $x ++) {
			DB::table ( 'users' )->insert ( [ 
					'id' => $x + 1,
			        'name' => $name[$x],
					'username' =>  $username[$x],
					'email' => $email[$x],
			        'role' => $role [$x],
					'password' => bcrypt('abc@123'),
					'created_at' => Carbon::now () 
			] );
		}
	}
}
