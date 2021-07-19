<?php

namespace App\Models;

use CodeIgniter\Model;
/* Author : FAHMI PRAYOGA */

class ActivationModel extends Model
{
    protected $table = 'auth_activations';
    protected $allowedFields = [
        'user_id',
        'token',
        'created_at'
    ];
}
