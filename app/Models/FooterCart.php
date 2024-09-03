<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class FooterCart extends Model
{
    protected $connection = 'mongodb';
    use HasFactory;

    protected $fillable = [
        'language_id',
        'music_cart',
        'video_cart',
        'bazar_cart',
        'event_cart',
        'shop_cart',
        'service_cart',
        'wishes_cart',
        'donate',
        'portal_cart',
        'payment_method',
        'accept_policy_terms',
        'office_information',
        'bank_information',
    ];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
