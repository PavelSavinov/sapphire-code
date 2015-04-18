<?php 
class UserTableSeeder extends Seeder {
	public function run(){
		$admin_user = DB::table('users')->insert([
			'username' => 'Lawless',
			'email' => 'pavel.doc2011@yandex.ru',
			'password' => Hash::make('password'),
			'first_name' => 'Pavel',
			'last_name' => 'Savinov',
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()
			]);

		DB::table('users')->insert([
			'username' => 'Darkhuilo',
			'email' => 'andrey.gladilkin@yandex.ru',
			'password' => Hash::make('xyuta'),
			'first_name' => 'Andrey',
			'last_name' => 'Gladilkin',
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()
			]);
	}
}



 ?>