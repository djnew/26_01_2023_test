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
        Schema::create('user_contacts', static function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('user_id')->comment('ID пользователя');
            $table->boolean('verified')->default(false)->comment('Подтверждено ли изменение контакта');
            $table->integer('user_contact_type_id')->comment('ID типа контакта');
            $table->string('value', 100)->comment('Значение контакта');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_fields');
    }
};
