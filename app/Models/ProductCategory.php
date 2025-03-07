<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductCategory extends Model
{
    use SoftDeletes;
    use HasFactory;

    public $table = 'product_categories';
    public $primaryKey = 'id_product_category';
    protected $fillable = [
        'name',
        'description',
        'status',
        'created_by',
        'updated_by',
        'deleted_by'
    ];
    
    public function products()
    {
        return $this->hasMany(Product::class, 'id_product_category','id_product_category');
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
