<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class SignInSection extends Model
{
    protected $connection = 'mongodb';
    use HasFactory;

    protected $fillable = [
        'language_id',
        'email',
        'password',
        'repeat_password',
        'signin',
        'login_error',
        'not_found',
        'forgot_password',
        'signup',
        'regain_password_mail',
        'email_format_wrong',
        'correct_email',
        'password_reset_sent',
        'reset_password_email',
        'verification',
        'authentication_code_sent',
        'did_not_receive_code',
        'resend_code',
        'title_email',
        'title_password',
        'login_error',
        'login_error_message',
        'send_buttton',
        'forgot_password',
        'reset_password',
        'lost_device_title',
        'verification_code',
        'enter_otp',
        'lost_device_subtitle',
        'time_left',
        'verify_now',
        'error_found',
        'invalid_otp',
        'create_password',
        'secure_password',
        'has_8_characters',
        'uppercase_or_symbol',
        'has_number',
        'continue',
        'successfully',
        'logged_in',
        'remember_me',
        'wrong_password', // Added missing field
    ];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
