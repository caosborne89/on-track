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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('subject', 255);
            $table->text('description');
            $table->string('status', 50);
            $table->foreignId('assignee_id')->nullable()->constrained(table: 'users', indexName: 'tickets_assignee_id')->nullOnDelete();
            $table->foreignId('author_id')->nullable()->constrained(table: 'users', indexName: 'tickets_author_id')->nullOnDelete();
            $table->foreignId('project_id')->constrained()->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
