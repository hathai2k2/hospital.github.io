<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Phieu;
class Benhnhan extends Model
{
    use HasFactory;
    protected $table = "Benhnhans";
    protected $primaryKey = "MaBN";
    protected $fillable = ["TenBN", "Address"];
    public function rPhieu(){
        return $this->hasMany(Phieu::class,"MaBN","MaBN");
    }
}
