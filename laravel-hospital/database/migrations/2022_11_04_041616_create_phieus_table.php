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
        Schema::create('phieus', function (Blueprint $table) {
            $table->id("MaPhieu");
            $table->string("TenPhieu");
            $table->unsignedBigInteger("MaBN");
            $table->timestamps();
            $table->foreign("MaBN")->references("MaBN")->on("Benhnhans")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phieus');
    }
};
