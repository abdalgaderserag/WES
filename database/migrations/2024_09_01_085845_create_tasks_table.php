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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->integer('creator_id',0,1);
            $table->integer('user_id',0,1);
            $table->integer('submit_id',0,1)->nullable();
            $table->string('title');
            $table->date('deadline');
            $table->date('submit_at')->nullable();
            $table->text('description');
            $table->text('attachments')->nullable();
            $table->integer('status',0,1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
