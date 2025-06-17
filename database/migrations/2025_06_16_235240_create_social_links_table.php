<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('social_links', function (Blueprint $table) {
            $table->id();
            $table->string('tenant_id')->index();
            $table->string('platform', 1); // ex: twitter, linkedin
            $table->string('url');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('social_links');
    }
};
