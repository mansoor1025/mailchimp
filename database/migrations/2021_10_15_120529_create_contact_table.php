<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email')->length(100);
            $table->string('first_name')->length(100);
            $table->string('last_name')->length(100);
            $table->string('phone_number')->length(100);
            $table->string('pin_code')->length(100);
            $table->string('address')->length(100);
            $table->integer('export_email')->default(0);
            $table->integer('status')->default(1);
            $table->timestamps('created_at');
            $table->timestamps('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact');
    }
}
