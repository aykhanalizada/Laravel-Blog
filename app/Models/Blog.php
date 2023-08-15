<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

protected $table="blogs";
protected $fillable=["id","title","content","image", "created_at","updated_at"];



public function tags(){
    
return $this->belongsToMany(Tag::class);
}

}