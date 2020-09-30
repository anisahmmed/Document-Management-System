<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Document extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
      'title', 'description', 'author_name', 'file', 'category_id', 'feedback_message', 'approval_status',
    ];


    public function RelationBetweenCategory()
    {
      return $this->hasOne('App\Models\Category', 'id', 'category_id');
    }
}
