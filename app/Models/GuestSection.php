<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class GuestSection extends Model
{
    protected $connection = 'mongodb';
    use HasFactory;

    protected $fillable = [
        'language_id',
        'dear_guest',
        'guest_message',
        'create_account',
        'account_message',
        'sign_in',
        'sign_in_message',
        'close'
    ];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
