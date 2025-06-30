<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasUuids;
    protected $table = 'contacts';
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'email_2',
        'phone',
        'phone_2',
        'mobile',
        'fax',
        'assistant_name',
        'assistant_phone',
        'job_title',
        'Skype_ID',
        'twitter',
        'department',
        'company_id',
        'lead_source',
        'birth_date',
        'mailing_street',
        'mailing_city',
        'mailing_state',
        'mailing_zip_code',
        'mailing_country',
        'other_street',
        'other_city',
        'other_state',
        'other_zip_code',
        'other_country',
        'description',
    ];
    protected $guarded = [
        'uuid',
        'created_at',
        'updated_at',
    ];
}
