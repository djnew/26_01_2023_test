<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_contact_types', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->comment('Название');
            $table->string('name', 100)->comment('Название');
            $table->boolean('enabled')->default(false)->comment('Флаг активности типа');
            $table->string('handler')->comment('Полное имя класса обработчика отправки');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_contact_types');
    }
};
