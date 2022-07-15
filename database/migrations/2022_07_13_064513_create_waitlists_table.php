<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWaitlistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('waitlists', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('clientId')->nullable();
            $table->string('customer_id')->nullable();
            $table->string('party_size')->nullable();
            $table->string('quoted_wait')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('user_id')->nullable();
            $table->string('status')->default('1');
            $table->string('is_served')->default('0');
            $table->Integer('visit_count')->default(1);
            $table->string('is_deleted')->default('0');
            $table->string('email',100)->unique()->nullable();
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
        Schema::dropIfExists('waitlists');
    }
}
