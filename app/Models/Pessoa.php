<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;

    // Define o nome da tabela explicitamente, já que o Laravel espera "pessoas"
    protected $table = 'pessoas';

    // Colunas que podem ser preenchidas via atribuição em massa
    protected $fillable = ['nome', 'email'];

    /**
     * Relacionamento um-para-muitos (Pessoa possui vários veículos)
     */
    public function veiculos()
    {
        return $this->hasMany(Veiculo::class);
    }
}
