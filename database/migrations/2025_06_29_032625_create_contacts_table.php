<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('email_2')->nullable();
            $table->string('phone');
            $table->string('phone_2')->nullable();
            $table->string('mobile');
            $table->string('fax');
            $table->string('assistant_name');
            $table->string('assistant_phone');
            $table->string('job_title');
            $table->string('Skype_ID');
            $table->string('twitter');
            $table->string('department');
            $table->string('company');
            $table->string('lead_source');
            $table->date('birth_date');
            $table->string('mailing_street');
            $table->string('mailing_city');
            $table->string('mailing_state');
            $table->string('mailing_zip_code');
            $table->string('mailing_country');
            $table->string('other_street')->nullable();
            $table->string('other_city')->nullable();
            $table->string('other_state')->nullable();
            $table->string('other_zip_code')->nullable();
            $table->string('other_country')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
