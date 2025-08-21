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
        Schema::table('demo_bookings', function (Blueprint $table) {
            $table->unsignedBigInteger('availability_slot_id')->nullable()->after('id');
            $table->foreign('availability_slot_id')->references('id')->on('availability_slots')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('demo_bookings', function (Blueprint $table) {
            $table->dropForeign(['availability_slot_id']);
            $table->dropColumn('availability_slot_id');
        });
    }
};