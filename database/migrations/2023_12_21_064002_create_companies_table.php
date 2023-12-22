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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('photo_logo');
            $table->string('photo_logo');
            $table->string('footer_copyright');
            $table->string('contact_address');
            $table->string('contact_email');
            $table->string('contact_phone');
            $table->string('contact_map_iframe');
            $table->string('receive_email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
