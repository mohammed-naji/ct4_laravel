<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Attributes\Scope;

class Course extends Model
{
    use HasFactory, SoftDeletes;

    // protected $fillable = ['title', 'image'];
    protected $guarded = [];

    // protected $table = "my_courses";

    protected static function booted(): void
    {
        // static::addGlobalScope('hours', function (Builder $builder) {
        //     $builder->where('hours', '>', 40);
        // });
    }

    #[Scope]
    protected function hours(Builder $query): void
    {
        $query->where('hours', '>', 40);
    }
}
