<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Vitrine
 * @package App
 */
class Vitrine extends Model
{
    protected $table = 'produtos_vitrine';

    protected $fillable = ['produto_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function produtos()
    {
        return $this->hasMany(Produto::class);
    }
}
