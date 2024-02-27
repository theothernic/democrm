<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Concerns\HasUuids;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\SoftDeletes;

    class Contact extends Model
    {
        use HasUuids, SoftDeletes;

        protected $fillable = [
            'entity_id',
            'name',
            'company',
            'website'
        ];

        public function entity()
        {
            return $this->belongsTo(User::class);
        }
    }
