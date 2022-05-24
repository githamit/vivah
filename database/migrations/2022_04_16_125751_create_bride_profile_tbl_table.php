<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrideProfileTblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bride_profile_tbl', function (Blueprint $table) {
            $table->id();
            $table->string('role')->nullable()->comment('3 bride');
            $table->string('reg_bride_tbl_id')->nullable()->comment('3 bride');
            $table->string('bride_profile_id')->nullable()->comment('3 bride');
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('marital_status_tbl_id')->nullable();
            $table->string('birthday')->nullable();
            $table->string('age')->nullable();
            $table->string('birth_state_tbl_id')->nullable();
            $table->string('birth_city')->nullable();
            $table->string('birth_name')->nullable();
            $table->string('birth_time')->nullable();
            $table->string('email')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('manglik')->nullable();
            $table->string('religion_tbl_id')->nullable();
            $table->string('cast')->nullable();
            $table->string('mother_tounge')->nullable();
            $table->string('sub_cast')->nullable();
            $table->string('gotra')->nullable();
            $table->string('country')->nullable();
            $table->string('current_state_tbl_id')->nullable();
            $table->string('current_city')->nullable();
            $table->string('proof_identity')->nullable();
            $table->string('proof_address')->nullable();

            $table->string('profile')->nullable();
            $table->string('body_type')->nullable();
            $table->string('complexion')->nullable();
            $table->string('weight')->nullable();
            $table->string('height')->nullable();
            $table->string('physical_status')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('drink')->nullable();
            $table->string('smoke')->nullable();
            $table->string('highest_qualification')->nullable();
            $table->string('passout_year')->nullable();
            $table->string('studied_from')->nullable();
            $table->string('occupation')->nullable();
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
        Schema::dropIfExists('bride_profile_tbl');
    }
}


