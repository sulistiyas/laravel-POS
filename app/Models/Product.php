<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    use HasFactory;
    
    public $table = 'products';
    public $primaryKey = 'id_product';
    protected $fillable = [
        'name',
        'description',
        'price',
        'id_product_category',
        'stock',
        'created_by',
        'updated_by',
        'deleted_by'
    ];

    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'id_product_category','id_product_category');
    }

    public function suppliers()
    {
        return $this->hasMany(Supplier::class, 'id_product_category','id_product_category');
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    public function updatedBy()
    {
        return $this->belongsTo(User::class, 'updated_by', 'id');
    }

    public function deletedBy()
    {
        return $this->belongsTo(User::class, 'deleted_by', 'id');
    }
}
