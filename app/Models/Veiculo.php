<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    use HasFactory;

    // Define o nome da tabela explicitamente
    protected $table = 'veiculos';

    // Colunas que podem ser preenchidas via atribuição em massa
    protected $fillable = ['modelo', 'marca', 'pessoa_id'];

    /**
     * Relacionamento muitos-para-um (Veículo pertence a uma pessoa)
     */
    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class);
    }

    /**
     * Relacionamento um-para-muitos (Veículo possui várias revisões)
     */
    public function revisoes()
    {
        return $this->hasMany(Revisao::class);
    }
}