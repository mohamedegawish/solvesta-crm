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
        'email-2',
        'phone',
        'phone-2',
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
        'copy_mailing_to_other_address',
        'other_street',
        'other_city',
        'other_state',
        'other_zip_code',
        'other_country',
        'contact_owner_id',
        'description',
    ];
    protected $guarded = [
        'uuid',
        'created_at',
        'updated_at',
    ];
}
