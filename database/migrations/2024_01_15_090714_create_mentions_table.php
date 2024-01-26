<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('mentions', function (Blueprint $table) {
            $table->id('mention_id');
            $table->foreignId('user_id_source')->constrained('users');
            $table->foreignId('user_id_target')->constrained('users');
            $table->foreignId('artwork_id')->nullable()->constrained('artworks');
            $table->foreignId('comment_id')->nullable()->constrained('comments');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mentions');
    }
};
