<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class Address extends Model
    {
        protected $fillable = [
            'line1',
            'line2',
            'city',
            'state',
            'country',
            'postal'
        ];



    }
