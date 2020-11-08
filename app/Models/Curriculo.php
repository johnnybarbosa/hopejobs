<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Curriculo extends Model
{
    protected $guarded = ['id', 'endereco_id'];

    /**
     * Relacionamento com o endereço
     * @return HasOne
     */
    public function endereco()
    {
        return $this->hasOne(Endereco::class);
    }
    /**
     * Relacionamento com a experiência
     * @return HasMany
     */
    public function experiencias()
    {
        return $this->hasMany(Experiencia::class);
    }
    /**
     * Relacionamento com a formação
     * @return HasMany
     */
    public function formacoes()
    {
        return $this->hasMany(Formacao::class);
    }
    /**
     * Relaciomanto com o idioma
     * @return HasMany
     */
    public function idiomas()
    {
        return $this->hasMany(Idioma::class);
    }
    /**
     * Relacionamento com o telefone
     * @return HasMany
     */
    public function telefones()
    {
        return $this->hasMany(Telefone::class);
    }
    /**
     * Relacionamento inverso com o usuário
     * @return BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
