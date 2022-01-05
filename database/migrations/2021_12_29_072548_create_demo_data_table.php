<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemoDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demo_data', function (Blueprint $table) {
            $table->id();
            $table->integer('serial')->nullable();
            $table->longText('name')->nullable();
            $table->longText('details')->nullable();
            $table->double('price')->nullable();
            $table->double('qty')->nullable();
            $table->double('total')->nullable();
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
        Schema::dropIfExists('demo_data');
    }
}
