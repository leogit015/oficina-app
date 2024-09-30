<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Revisao extends Model
{
    use HasFactory;

    
    protected $table = 'revisoes';

  
    protected $fillable = ['data_revisao', 'descricao', 'pessoa_id','veiculo_id', 'km_atual'];

  
    public function veiculo()
    {
        return $this->belongsTo(Veiculo::class, 'veiculo_id');
    }

    public function pessoa()
{
    return $this->belongsTo(Pessoa::class, 'pessoa_id');
}

}
