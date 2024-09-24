<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Revisao extends Model
{
    use HasFactory;

    // Define o nome da tabela explicitamente
    protected $table = 'revisoes';

    // Colunas que podem ser preenchidas via atribuição em massa
    protected $fillable = ['data', 'descricao', 'veiculo_id'];

    /**
     * Relacionamento muitos-para-um (Revisão pertence a um veículo)
     */
    public function veiculo()
    {
        return $this->belongsTo(Veiculo::class);
    }
}
