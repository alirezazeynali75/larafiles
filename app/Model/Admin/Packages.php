<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{
    protected $primaryKey = 'package_id';
    protected $guarded =['package_id'];

    public function files()
    {
        return $this->belongsToMany(Files::class , 'files_packages' , 'package_id' , 'file_id');
    }
}
