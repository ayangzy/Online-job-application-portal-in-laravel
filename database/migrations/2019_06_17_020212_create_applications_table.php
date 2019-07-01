<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned();
            $table->string('position');
            $table->string('phone')->nullable();
            $table->string('contact')->nullable();
            $table->string('state')->nullable();
            $table->string('lga')->nullable();
            $table->string('identification_type')->nullable();
            $table->string('identification_number')->nullable();
            $table->string('profile_picture')->nullable();
            $table->string('nysc_year')->nullable();
            $table->string('nysc_number')->nullable();
            $table->string('secondary')->nullable();
            $table->string('secondary_year')->nullable();
            $table->string('tertiary')->nullable();
            $table->string('tertiary_year')->nullable();
            $table->string('upload_ssce')->nullable();
            $table->string('upload_nysc')->nullable();
            $table->string('upload_degree')->nullable();
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
        Schema::dropIfExists('applications');
    }
}
