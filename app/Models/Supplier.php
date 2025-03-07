<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Supplier extends Model
{
    use SoftDeletes;
    protected $table = 'suppliers';
    protected $primaryKey = 'id_supplier';
    protected $fillable = [
        'name',
        'address',
        'phone',
        'email',
        'id_product',
        'created_by',
        'updated_by',
        'deleted_by'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'id_product');
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
