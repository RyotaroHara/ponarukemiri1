<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSexToUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('sex','1');
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
        $table->dropColumn('sex');
    });
    }
=======
    Schema::table('users', function (Blueprint $table) {
        $table->dropColumn('sex');
    });
>>>>>>> 54a488ec022c37e54d97efa6f1ae79a192fa7497
}
}