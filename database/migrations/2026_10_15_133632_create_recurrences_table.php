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
        Schema::create('recurrences', function (Blueprint $table) {
            $table->id();
            $table->decimal('amount', 10, 2);
            $table->string('description');
            $table->string('frequency');
            $table->string('type');
            $table->date('starts_at');
            $table->date('ends_at')->nullable();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('category_id')->constrained();
            $table->foreignId('account_id')->constrained();
            $table->foreignId('group_id')
                ->nullable()
                ->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recurrences');
    }
};
