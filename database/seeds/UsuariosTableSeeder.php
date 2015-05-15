<?php

use Illuminate\Database\Seeder;

class UsuariosTableSeeder extends Seeder
{
	public function run()
	{
		\DB::table('usuarios')->insert(array(
											'nombre' => 'Guillermina',
											'apellido' => 'Belli',
											'email' => 'belliguille@gmail.com',
											'username' => 'guillermina.belli',
											'password' => \Hash::make('super'),
											'estado' => 1,
			)
		);

		\DB::table('usuarios')->insert(array(
											'nombre' => 'Leonel',
											'apellido' => 'Luchini',
											'email' => 'leo_luchi@hotmail.com',
											'username' => 'leonel.luchini',
											'password' => \Hash::make('super'),
											'estado' => 1,
			)
		);

		\DB::table('usuarios')->insert(array(
											'nombre' => 'Jeronimo',
											'apellido' => 'Vieyra',
											'email' => 'jerodcv@gmail.com',
											'username' => 'jeronimo.vieyra',
											'password' => \Hash::make('super'),
											'estado' => 1,
			)
		);

	}
	
}

?>