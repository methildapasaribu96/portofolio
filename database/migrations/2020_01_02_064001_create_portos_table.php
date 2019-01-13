<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portos', function (Blueprint $table) {
            $table->increments('id');
            $table->longtext('profil');
            $table->unsignedInteger('biodata_id');
            $table->unsignedInteger('education_id');
            $table->unsignedInteger('skill_id');
            $table->unsignedInteger('organization_id');
            $table->unsignedInteger('sertificates_id');
            $table->timestamps();

            $table->foreign('organization_id')->references('id')->on('organizations')->onDelete('cascade');
            $table->foreign('skill_id')->references('id')->on('skills')->onDelete('cascade');
            $table->foreign('education_id')->references('id')->on('educations')->onDelete('cascade');
            $table->foreign('biodata_id')->references('id')->on('biodatas')->onDelete('cascade');
            $table->foreign('sertificates_id')->references('id')->on('sertificates')->onDelete('cascade');

        });
    }

    public function down()
    {
        Schema::dropIfExists('portos');
    }
}
