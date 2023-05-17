<?php

namespace App\Models;

use table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TbNews extends Model
{
    use HasFactory;

    protected $table = 'tb_news';
    protected $fillable = ['type',
    'date_of_issuance',
    'description'
    ];


}
