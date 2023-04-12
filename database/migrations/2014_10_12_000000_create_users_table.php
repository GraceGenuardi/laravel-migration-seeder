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
Schema::create('trains', function (Blueprint $table) {
$table->id();
$table->string('company');
$table->string('departure_station');
$table->string('arrival_station');
$table->dateTime('departure_time');
$table->dateTime('arrival_time');
$table->string('train_code');
$table->integer('carriages_number');
$table->boolean('on_time')->default(1);
$table->boolean('cancelled')->default(0);
$table->timestamps();
});
};

}   
