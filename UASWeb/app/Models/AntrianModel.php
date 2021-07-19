<?php

namespace App\Models;

use CodeIgniter\Model;
/* Author : FAHMI PRAYOGA */

class AntrianModel extends Model
{
    protected $table      = 'antrian';
    protected $allowedFields = ['no_antrian', 'id_loket', 'id_users', 'tanggal'];
}
