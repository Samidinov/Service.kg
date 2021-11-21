<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->foreignId('master_id')->references('id')->on('masters')->onDelete('cascade');
            $table->foreignId('client_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('work_id')->primary()->references('id')->on('works')->onDelete('cascade');
            $table->string('status');
            $table->string('rating');
            $table->text('description')->nullable();
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
        Schema::dropIfExists('contracts');
    }
}
