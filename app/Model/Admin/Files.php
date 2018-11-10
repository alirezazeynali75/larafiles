<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Files extends Model
{
    protected $table = 'files';
    protected $primaryKey = 'file_id';
    protected $fillable = ['file_name' , 'file_title' , 'file_size' , 'file_type' , 'file_description'];

    public function packages()
    {
        return $this->belongsToMany(Packages::class , 'files_packages' , 'file_id' , 'package_id');
    }

}
