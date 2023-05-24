<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class deleteModel extends Model
{
    use HasFactory;
    protected $fillable = [
       
        'type',
        'date_of_issuance',
        'description']; 

}
