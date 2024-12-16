<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Category extends Model
{
    use SoftDeletes;

    protected $table = 'category';
    protected $primaryKey = 'category_id';

    protected $fillable = [
        'name',
    ];


    public function products()
    {
        return $this->hasMany(Product::class, 'category_id', 'category_id');
    }
}
