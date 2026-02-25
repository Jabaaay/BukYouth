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
        Schema::create('youth', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type')->default('LYDO'); // Add 'type' column with default value 'LYDO'
            $table->string('email')->unique();
            $table->string('contact_number');
            $table->string('facebook_page')->nullable(); // optional
            $table->string('municipality')->nullable();
            $table->string('brgy')->nullable();
            $table->integer('registered_count');
            $table->string('file_plan')->nullable();
            $table->enum('lydp_status', ['Pending', 'Approved', 'Rejected'])->default('Pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('youth');
    }
};
