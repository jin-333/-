<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model



{
    use SoftDeletes;
    use HasFactory;
    
     protected $fillable = [
       'title',
       'body',
];

    public function getPaginateByLimit(int $limit_count = 100)
   { 
    return $this->orderBy('updated_at', 'DESC')->Paginate($limit_count);
   }
  
}
