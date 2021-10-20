<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModalitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modalities', function (Blueprint $table) {
            $table->bigIncrements('Modality_Id');
            $table->string('modName')->required();
            $table->string('modtype')->required();
            $table->integer('numberOfGames')->required();
            $table->boolean('continuous');
            $table->text('notes')->nullable();
            // $table->json('tableintxt')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();

            // id->required()
            // name
            // modtype
            // number of games
            // continuity
            // notes
                // media
                // targets/goals
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modalities');
    }
}
