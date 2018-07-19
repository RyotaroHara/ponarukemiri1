<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFatExerciseIntensityToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
           Schema::table('users', function (Blueprint $table) {
            $table->string('fat','3');
            $table->string('ExerciseIntensity','3');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
           Schema::table('users', function (Blueprint $table) {
        $table->dropColumn('fat');
        $table->dropColumn('ExerciseIntensity');
        });
    }
}
