<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;

    protected $table = 'pessoas';

    
    protected $fillable = ['nome', 'telefone', 'genero', 'idade']; 

    public function veiculos()
    {
        return $this->hasMany(Veiculo::class);
    }
}

