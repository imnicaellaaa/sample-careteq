<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'middlename',
        'lastname',
        'bday',
        'age',
        'suffix',
        'gender',
        'title',
        'country',
        'province',
        'municipality',
        'brgy',
        'houseNo_streetName',
        'postal_code',
        'status',
        'patient_id',
        'id_type',
        'id_no',
        'upload_id',
        'user_role',
    ];
}
