<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Revisao extends Model
{
    use HasFactory;

    
    protected $table = 'revisoes';

  
    protected $fillable = ['data', 'descricao', 'veiculo_id'];

  
    public function veiculo()
    {
        return $this->belongsTo(Veiculo::class);
    }
}
