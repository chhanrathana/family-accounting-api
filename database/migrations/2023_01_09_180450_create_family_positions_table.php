<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamilyPositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('family_positions', function (Blueprint $table) {
            $table->id();
            $table->string('name_kh', 50);
            $table->string('name_en', 50);  
            $table->integer('sort')->default(10);  
            $table->boolean('active')->default(1);  
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('family_positions');
    }
}
