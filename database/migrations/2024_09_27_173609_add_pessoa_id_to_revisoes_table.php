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
    Schema::table('revisoes', function (Blueprint $table) {
        // Adiciona a coluna pessoa_id como uma chave estrangeira
        $table->unsignedBigInteger('pessoa_id')->nullable();
        $table->foreign('pessoa_id')->references('id')->on('pessoas')->onDelete('set null');
    });
}

public function down()
{
    Schema::table('revisoes', function (Blueprint $table) {
        // Remove a coluna e a chave estrangeira
        $table->dropForeign(['pessoa_id']);
        $table->dropColumn('pessoa_id');
    });
}

};
