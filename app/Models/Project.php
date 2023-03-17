<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'image', 'is_published', 'type_id'];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function technologies()
    {
        return $this->belongsToMany(Technology::class);
    }

    public function getCreateAt()
    {
        return Carbon::create($this->updated_at)->format('d-m-Y');
    }

    public function getUpdateAt()
    {
        return Carbon::create($this->updated_at)->format('d-m-Y H:i:s');
    }
}
