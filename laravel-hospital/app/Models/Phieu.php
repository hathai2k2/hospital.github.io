<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Benhnhan;
class Phieu extends Model
{
    use HasFactory;
    protected $table = "phieus";
    protected $primaryKey = "MaPhieu";
    protected $fillable = ["TenPhieu", "MaBN"];
//     public function rBenhnhan(){
//         return $this->belongsTo(Benhnhan::class);
//     }
}
