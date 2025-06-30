<?php

namespace App\Models;

use Actuallymab\LaravelComment\Contracts\Commentable;
use Actuallymab\LaravelComment\HasComments;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model implements Commentable
{
    /** @use HasFactory<\Database\Factories\VideoFactory> */
    use HasComments, HasFactory;

    protected $table = 'video';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'source', 'code', 'title'
    ];

    public function mustBeApproved(): bool
    {
        // default false
        return true;
    }
}
