<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];
    public function profileImage() {
        return_($this->image) ? '/storage/' . $this->image: 'https://instagram.fktm3-1.fna.fbcdn.net/v/t51.2885-19/s320x320/47243513_2342234456018888_5665387413355102208_n.jpg?_nc_ht=instagram.fktm3-1.fna.fbcdn.net&_nc_ohc=eNtjQvxG6I0AX-zmd5b&oh=64a713d1e2ba7c7119e3bb2ae254999a&oe=5FA28518';
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    use HasFactory;
}

