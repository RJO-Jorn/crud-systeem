<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klant extends Model
{
    use HasFactory;

    protected $table = 'klanten';

    protected $fillable = [
        'firstName',
        'lastName',
        'emailAddress',
        'phoneNumber',
        'birthDate',
        'houseNumber',
        'StreetAddress',
        'City',
        'Country'
    ];
}
