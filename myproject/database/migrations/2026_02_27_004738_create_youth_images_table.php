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
        Schema::create('youth_images', function (Blueprint $table) {
            $table->id();

             $table->foreignId('youth_id')
                  ->constrained('youth')
                  ->onDelete('cascade');

            $table->string('image_url'); // Cloudinary secure URL
            $table->string('public_id'); // for deleting from Cloudinary

            $table->boolean('is_primary')->default(true); 
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('youth_images');
    }
};
