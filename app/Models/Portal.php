<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portal extends Model
{
    use HasFactory;
    public function listings()
    {
        return $this->belongsToMany(Listing::class, 'listing_portals', 'portal_id', 'listing_id');
    }
}
