<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class SectionSetting   extends Model
{
    protected $connection = 'mongodb';
    use HasFactory;

    protected $fillable = [
        'language_id',
        'language_id',
        'setNewPassword',
        'oldPassword',
        'newPassword',
        'confirmNewPassword',
        'email',
        'oldEmail',
        'newEmail',
        'repeatNewEmail',
        'details',
        'status',
        'notificationType',
        'musicVolume',
        'messagesRingtone',
        'callRingtone',
        'notificationsRingtone',
        'leaveReason',
        'describeReason',
        'contactType',
        'message',
    ];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
    protected $casts = [
        'notificationType' => 'array',
        'musicSetting' => 'array',
        'leaveReason' => 'array',
    ];
}
