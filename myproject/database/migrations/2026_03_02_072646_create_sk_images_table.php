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
        Schema::create('sk_images', function (Blueprint $table) {
            $table->id();

            $table->foreignId('sk_id')
                ->constrained('sk') // make sure the table name is 'sk'
                ->cascadeOnDelete();

            $table->string('image_url'); // Cloudinary secure URL
            $table->string('public_id'); // Cloudinary public ID
            $table->boolean('is_primary')->default(true);
            $table->timestamps();

            $table->index('sk_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sk_images');
    }
};
