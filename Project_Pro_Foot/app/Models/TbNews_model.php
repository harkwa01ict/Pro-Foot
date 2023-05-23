<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TbNews_model extends Model
{
    use HasFactory;

    //protected $table = 'tb_news_models';

    protected $fillable = [
    'type',
    'date_of_issuance',
    'description']; 


}



