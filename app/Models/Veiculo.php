<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    use HasFactory;

    
    protected $table = 'veiculos';

    
    protected $fillable = ['modelo', 'marca', 'pessoa_id', 'ano', 'placa'];


   
    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class);
    }

    public function revisoes()
    {
        return $this->hasMany(Revisao::class);
    }
}