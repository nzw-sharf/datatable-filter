<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    public function bedroom()
    {
        return $this->belongsTo(Bedroom::class, 'bedroom_id', 'id');
    }
    public function bathroom()
    {
        return $this->belongsTo(Bathroom::class, 'bathroom_id', 'id');
    }

    public function portals()
    {
        return $this->belongsToMany(Portal::class, 'listing_portals', 'listing_id', 'portal_id');
    }
}
