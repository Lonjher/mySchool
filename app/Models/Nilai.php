<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;
    protected $fillable = [
        'nilai'
    ];

    protected $guarded = [
        'id_nilai'
    ];

    public function student() {
        return $this->belongsTo(Student::class);
    }

    public function mapel(){
        return $this->belongsTo(Mapel::class);
    }
}
