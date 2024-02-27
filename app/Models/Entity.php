<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Concerns\HasUuids;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\SoftDeletes;

    class Entity extends Model
    {
        use HasUuids, SoftDeletes;

        protected $fillable = [
            'name',
            'type'
        ];

        public function contacts()
        {
            return $this->hasMany(Contact::class);
        }
    }
