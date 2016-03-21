<?php

namespace SOA\user;

use Illuminate\Database\Eloquent\Model as Eloquent;

	class User extends Eloquent
	{
		protected $table = 'users';
		protected $fillable = [
			'email',
			'username',
			'password',
			'active',
			'active_hash',
			'remember_identifier',
			'remember_token',
		];

		public function getFullName()
		{
			if(!$this->first_name || !$this->last_name)
				return null;
			else
				return "{$this->first_name} {$this->last_name}";
		}

		public function getFullNameorUsername()
		{
			return $this->getFullName() ?: $this->username;
		}
	}
?>