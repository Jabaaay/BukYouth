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

            // Add foreign key to youth table
            $table->foreignId('youth_id')
                ->constrained('youth') // make sure the table name is 'youth'
                ->cascadeOnDelete();

            $table->string('image_url'); // Cloudinary secure URL
            $table->string('public_id'); // Cloudinary public ID
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
