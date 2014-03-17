<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
		User::create(array('username'=>'kprosciewicz', 'password'=>Hash::make('11a23b58c13d'), 'sa'=>1));
		Post::create(array('title'=>'Tytuł', 'content'=>'Treść'));
	}

}
