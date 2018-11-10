<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Plans extends Model
{
    protected $fillable = ['plan_title','plan_limit_download_count','plan_price' ,'plan_days_count'];
    protected $primaryKey = 'plan_id';
    protected $table = 'plans';

}
