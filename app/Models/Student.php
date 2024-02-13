<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $primaryKey = "id_student";
    protected $table = "students";
    protected $fillable = [
        'id_nilai',
        'name_siswa',
        'kelas',
    ];

    // protected $guarded = [
    //     'id_student',
    // ];

    public function nilai(){
        return $this->hasMany(Nilai::class);
    }

    public function mapel(){
        return $this->hasMany(Mapel::class);
    }
}
