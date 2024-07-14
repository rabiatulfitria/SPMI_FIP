<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penetapan extends Model
{
    use HasFactory;

     /**
     * Atribut diisi secara massal
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'level_penetapan',
        'namaDokumen_penetapan',
        'unggahDokumen_penetapan',
    ];

    /**
     * Jika Penetapan berupa level perangkatspmi.
     *
     * @return bool
     */
    public function isPerangkatspmi()
    {
        return $this->level_penetapan === 'perangkatspmi';
    }

    /**
     * Jika Penetapan berupa level standarinstitusi.
     *
     * @return bool
     */
    public function isStandarinstitusi()
    {
        return $this->level_penetapan === 'standarinstitusi';
    }
}