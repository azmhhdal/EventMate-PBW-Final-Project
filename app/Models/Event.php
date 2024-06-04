<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    
    protected $table = "events";
    protected $fillable = [
        'event_name', 'date', 'time', 'location', 'location_link', 'capacity', 'dresscode',
        'contact_person', 'social_media_link', 'event_hashtag', 'attendance', 'polling',
        'event_code', 'user_id'
    ];

    public function participants()
    {
        return $this->belongsToMany(User::class, 'event_participants');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
