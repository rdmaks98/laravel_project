<?php

namespace App\Model\admin;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

// class Admin extends Model
// {
// 	protected $table = 'admin';
//     public $timestamps = false;
// }

class admin extends Authenticatable
{
	use Notifiable;
	
}
