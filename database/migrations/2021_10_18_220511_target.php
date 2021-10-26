<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Target extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('target', function (Blueprint $table) {
            $table->bigIncrements('Modality_Id');
            $table->string('modName')->nullable();
            $table->string('targetDescription')->required();
            $table->string('targetLevel')->required();
            $table->string('targetType')->required();
            $table->integer('targetDistance')->required();
            $table->smallinteger('targetMaxShots')->required();
            $table->string('requirement')->required();
            $table->string('scoringFactors')->required();

            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('target');
    }
}
