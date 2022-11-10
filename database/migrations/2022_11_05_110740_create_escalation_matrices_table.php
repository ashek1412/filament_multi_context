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
        Schema::create('escalation_matrices', function (Blueprint $table) {
            $table->id();
            $table->string('department');
            $table->string('escalation_step');
            $table->string('user');
            $table->string('emails');
            $table->tinyInteger('response_time');
            $table->tinyInteger('created_by');
            $table->tinyInteger('updated_by')->nullable();
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
        Schema::dropIfExists('escalation_matrices');
    }
};
