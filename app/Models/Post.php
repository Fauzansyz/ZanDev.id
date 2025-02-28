<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts'; // Nama tabel di database

    protected $fillable = [
        'title', 
        'content',
        'username',
    ]; // Field yang boleh diisi secara massal
}