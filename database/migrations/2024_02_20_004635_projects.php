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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title', 50)->nullable(false);
            $table->string('description', 300)->nullable(false);
            $table->enum('platform', ['Website', 'Mobile', 'Desktop'])->nullable(false);
            $table->enum('status', ['ON_PROGRESS', 'FINISHED', 'ON_HOLD', 'CANCELLED'])->nullable(false);
            $table->timestamp('start_date')->nullable(false);
            $table->timestamp('end_date')->nullable(true);

            $table->unsignedBigInteger('client_id')->nullable(false);

            $table->foreign('client_id')
                ->references('id')
                ->on('clients')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
