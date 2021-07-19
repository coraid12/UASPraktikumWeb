<?php

namespace App\Models;

use CodeIgniter\Model;
/* Author : FAHMI PRAYOGA */

class UserModel extends Model
{
    protected $table = 'users';
    protected $allowedFields = [
        'fullname',
        'email',
        'username',
        'password',
        'role',
        'alamat',
        'telepon',
    ];
}
