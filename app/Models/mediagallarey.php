<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class mediagallarey extends Model
{

    protected $table = 'mediagallareys'; // matches migration
    protected $fillable = ['image_path', 'caption', 'event_id', 'Organizer_id'];

    // relationships
    public function event()
    {
        return $this->belongsTo(events::class, 'event_id');
    }

    public function organizer()
    {
        return $this->belongsTo(User::class, 'Organizer_id');
    }
}
