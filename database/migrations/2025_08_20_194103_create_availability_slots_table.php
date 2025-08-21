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
        Schema::create('availability_slots', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->time('start_time');
            $table->time('end_time');
            $table->string('timezone')->default('Asia/Dubai');
            $table->boolean('is_available')->default(true);
            $table->boolean('is_recurring')->default(false);
            $table->json('recurring_days')->nullable(); // ['monday', 'tuesday', etc.]
            $table->date('recurring_until')->nullable();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade'); // Admin who owns this slot
            $table->text('notes')->nullable();
            $table->timestamps();

            $table->index(['date', 'is_available']);
            $table->index(['start_time', 'end_time']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('availability_slots');
    }
};
