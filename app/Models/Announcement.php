<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\AnnouncementController;

class Announcement extends Model
{
    protected $fillable = ['title', 'content', 'date'];
    use HasFactory;
}
