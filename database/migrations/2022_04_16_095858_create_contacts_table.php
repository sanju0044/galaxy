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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name',50)->nullable();
            $table->string('email',50)->nullable();
            $table->string('phone',15)->nullable();
            $table->string('company_name',50)->nullable();
            $table->string('city',50)->nullable();
            $table->string('state',50)->nullable();
            $table->string('message',200)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
};
