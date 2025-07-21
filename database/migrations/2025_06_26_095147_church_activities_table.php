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
    Schema::create('church_activities', function (Blueprint $table) {
    $table->id();
    $table->foreignId('church_id')->constrained();
    $table->string('activity_type');
    $table->integer('attendance');
    $table->decimal('offerings', 10, 2);
    $table->date('activity_date');
    $table->text('notes')->nullable();
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
