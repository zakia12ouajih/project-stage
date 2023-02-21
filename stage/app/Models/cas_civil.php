<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cas_civil extends Model
{
    use HasFactory;
    public $table = 'cas_civils';


    protected $fillable = [
        'type',
        'reste_derniere_session',
        'inscrit',
        'comdamne',
        'reste_sans_jugement',
        'date'
    ];
    public function cas_type()
    {
        return $this->belongsTo(cas_type::class, 'id_type');
    }
}
