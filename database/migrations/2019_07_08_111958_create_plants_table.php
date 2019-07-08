<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->enum('sun', ['full sun', 'part sun', 'part shade', 'full shade'])->nullable();
            $table->enum('soil type', ['loamy', 'sandy'])->nullable();
            $table->enum('soil acidity', ['acidic', 'neutral', 'alkaline'])->nullable();
            $table->text('planting notes')->nullable();
            $table->text('planting time')->nullable();
            $table->text('seedling')->nullable();
            $table->text('transplanting')->nullable();
            $table->text('spacing')->nullable();
            $table->text('watering')->nullable();
            $table->text('feeding')->nullable();
            $table->text('other notes')->nullable();
            $table->text('diseases')->nullable();
            $table->text('pests')->nullable();
            $table->text('harvesting')->nullable();
            $table->text('storage')->nullable();
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
        Schema::dropIfExists('plants');
    }
}
