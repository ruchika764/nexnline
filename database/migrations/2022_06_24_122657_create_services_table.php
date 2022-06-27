<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('service_name')->nullable();
            $table->string('display_name')->nullable();
            $table->text('description')->nullable();
            $table->string('duration')->nullable();
            $table->string('price')->nullable();
            $table->string('user_id')->nullable();
            $table->string('availaible_for')->default('0');
            $table->string('status')->default('1');
            $table->string('is_deleted')->default('0');
            $table->string('image')->default('default.png');
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
        Schema::dropIfExists('services');
    }
}
