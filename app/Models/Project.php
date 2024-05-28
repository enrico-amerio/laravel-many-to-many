<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function type(){
        return $this->belongsTo(Type::class);

    }
    public function technologies(){
        return $this->BelongsToMany(Technologie::class);
      }

    protected $fillable = ['title','description','type_id'];

}
