<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $table="accounts";
      protected $fillable = [
        'owner_id',
        'account_name',
        'account_site',
        'parent_account_id',
        'account_number',
        'account_type',
        'industry',
        'annual_revenue',
        'rating',
        'phone',
        'fax',
        'website',
        'ticker_symbol',
        'ownership',
        'employees',
        'sic_code',
        'billing_street',
        'billing_city',
        'billing_state',
        'billing_code',
        'billing_country',
        'shipping_street',
        'shipping_city',
        'shipping_state',
        'shipping_code',
        'shipping_country',
        'description',
    ];
    protected $guarded=['id'];

    public function owner(){
        $this->belongsTo(User::class);
    }
    public function parent_account(){
        $this->belongsTo(Account::class);
    }
}
