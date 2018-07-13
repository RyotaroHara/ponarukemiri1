<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddHeightAgeToUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('height','3');
            $table->string('age','3');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
<<<<<<< HEAD
        Schema::table('users', function (Blueprint $table) { 
        
=======
        Schema::table('users', function (Blueprint $table) {
>>>>>>> 54a488ec022c37e54d97efa6f1ae79a192fa7497
        $table->dropColumn('height');
        $table->dropColumn('age');

    });
<<<<<<< HEAD
    }
=======
>>>>>>> 54a488ec022c37e54d97efa6f1ae79a192fa7497
}
}