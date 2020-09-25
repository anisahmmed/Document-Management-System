<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JudgeCategory extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
      'judge_id', 'category_id',
    ];

    //Relation between JudgeCategory Model & User model
    public function RelationBetweenJudge()
    {
        return $this->hasOne('App\Models\User', 'id', 'judge_id');
    }

    //Relation between JudgeCategory model & Category model
    public function RelationBetweenCategory()
    {
        return $this->hasOne('App\Models\Category', 'id', 'category_id');
    }
}
