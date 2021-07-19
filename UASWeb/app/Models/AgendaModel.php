<?php

namespace App\Models;

use CodeIgniter\Model;
/* Author : FAHMI PRAYOGA */

class AgendaModel extends Model
{
    protected $table      = 'agenda';
    protected $allowedFields = ['nama', 'keterangan', 'file'];
}
