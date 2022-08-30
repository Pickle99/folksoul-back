<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class CreateUser extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'user:create {username} {email} {password}';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Create new user';

	/**
	 * Execute the console command.
	 *
	 * @return int
	 */
	public function handle()
	{
		$username = $this->argument('username');
		$email = $this->argument('email');
		$password = $this->argument('password');
		User::create([
			'username'     => $username,
			'email'        => $email,
			'password'     => bcrypt($password),
		]);
		$this->info('User successfully created ! your username :' . $username);
	}
}
