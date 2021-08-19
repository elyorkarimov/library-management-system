<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiotechnologicalFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('biotechnological_features', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->integer('status')->nullable()->default(1);
            $table->timestamps();
        });
        Schema::create('biotechnological_feature_translations', function (Blueprint $table) {
            // mandatory fields
            $table->bigIncrements('id'); // Laravel 5.8+ use bigIncrements() instead of increments()
            $table->string('locale')->index();

            // Foreign key to the main model
            $table->unsignedBigInteger('biotechnological_feature_id');
            $table->foreign('biotechnological_feature_id', 'fk_biotechnological_features')
                ->references('id')->on('biotechnological_features')
                ->onDelete('cascade');
            // Actual fields you want to translate
            $table->string('title');
            $table->string('slug');
            $table->longText('body')->nullable();
            $table->longText('description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('biotechnological_features');
    }
}
