<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secretaire extends Model
{
    use HasFactory;
    protected $primaryKey = 'user_id';

    protected $fillable = [
      'nom','prenom','user_id','id','gender','avatar'];

      
}
