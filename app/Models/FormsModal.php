<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class FormsModal extends Model
{
    //
    use  HasFactory;

    protected  $connection = 'mongodb';

    protected  $collection = 'Forms';

    protected  $fillable = ['form_name', 'form_data', 'created_at', 'updated_at'];
}
