<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class SettingOverviewSection    extends Model
{
    protected $connection = 'mongodb';
    use HasFactory;

    protected $fillable = [
        'language_id',
        'setting_overview',
        'notifications',
        'settings',
        'my_profile',
        'my_channels',
        'shortcut',
        'collection',
        'view_later',
        'market',
        'manage_items',
        'add',
        'manage_ads',
        'manage_notifications',
        'password',
        'manage_password',
        'email',
        'change_email',
        'ringtone',
        'manage_ringtone',
        'music',
        'manage_player',
        'network',
        'manage_connections',
        'documentation',
        'my_documents',
        'stoarage',
        'manage_storage',
        'violate',
        'manage_reels',
        'my_channels_2',
        'in_development_2',
        'soon_available_2',
        'stadnard',
        'upgrade_account',
    ];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
