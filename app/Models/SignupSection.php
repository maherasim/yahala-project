<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class SignupSection extends Model
{
    protected $connection = 'mongodb';
    use HasFactory;

    protected $fillable = [
        'language_id',
        'language_search',
        'language_save_change',
        'gender',
        'select_gender_prompt',
        'gender_ok',
        'gender_start',
        'firstname',
        'male',
        'female',
        'your_first_name',
        'your_last_name',
        'lastname',
        'username',
        'birthday',
        'your_status',
        'status_next',
        'status_back',
        'current_location',
        'address',
        'location',
        'nationality',
        'select_nationality',
        'information',
        'information_description',
        'origin',
        'select_province',
        'not_kurdish',
        'your_email',
        'repeat_email',
        'email_issue_message',
        'error_found',
        'user_exists',
        'user_already_exist',
        'email_ok',
        'your_phone_number',
        'repeat_password',
        'create_password',
        'password_confirmation',
        'password_criteria_min_length',
        'password_criteria_uppercase_symbol',
        'password_criteria_number',
        'activation_mail',
        'not_yet_code',
        'resend_now',
        'sent',
        'something_wrong',
        'invalid_opt',
        'password_ok',
        'account_created_success_message',
        'account_created_ok',
        'sign_in_redirect',
    ];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
