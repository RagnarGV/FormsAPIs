<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormSubmissions extends Model
{
    //

    use  HasFactory;

    protected  $connection = 'mongodb';

    protected  $collection = 'FormSubmissions';

    protected  $fillable = ['form_name', 'user_id', 'form_data', 'created_at', 'updated_at'];
}
