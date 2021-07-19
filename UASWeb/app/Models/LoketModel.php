<?php

namespace App\Models;

use CodeIgniter\Model;
/* Author : FAHMI PRAYOGA */

class LoketModel extends Model
{
    protected $table      = 'loket';
    protected $allowedFields = ['loket', 'id_users', 'status'];
}
