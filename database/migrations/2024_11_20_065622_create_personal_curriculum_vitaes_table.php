<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalCurriculumVitaesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_curriculum_vitaes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('curriculum_vitae_user_id')->constrained()->onDelete('cascade');
            $table->string('full_name_curriculum_vitae');
            $table->string('email_curriculum_vitae');
            $table->string('phone_curriculum_vitae');
            $table->text('address_curriculum_vitae');
            $table->text('personal_summary');
            $table->date('date_of_birth_curriculum_vitae');
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
        Schema::dropIfExists('personal_curriculum_vitaes');
    }
}
