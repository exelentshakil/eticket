<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFloorsTable extends Migration
{
    public function up()
    {
        Schema::create('floors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('train_id')->constrained()->onDelete('cascade');
            $table->string('floor_name');
            $table->integer('seat_floor');
            $table->integer('seat_type');
            $table->integer('fare_type_id');
            $table->string('seat_fare_type')->nullable();
            $table->decimal('seat_fare', 8, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('floors');
    }
}
