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
        Schema::create('parties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained(table: 'users', indexName: 'party_user_id');  /* Obtém o 'id' da tabela 'users' */
            $table->string('name');
            $table->integer('age');
            $table->integer('invites');
            $table->string('food');
            $table->dateTime('date', 0);
            $table->enum('status', ['a', 'w', 'd'])->default('w');    /* Controla os status dos pedidos ('Approved', 'Waiting', 'Denied') */
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parties');
    }
};
