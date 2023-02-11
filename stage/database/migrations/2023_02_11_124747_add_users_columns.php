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
        Schema::table('users', function (Blueprint $table) {
            $table->string('userName')->nullable()->after('id');
            $table->string('firstName')->nullable()->after('userName');
            $table->string('lastName')->nullable()->after('firstName');
            $table->integer('role')->default('0')->after('lastName');
            $table->dropColumn('name');
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
            $table->dropColumn('userName');
            $table->dropColumn('firstName');
            $table->dropColumn('lastName');
            $table->dropColumn('role');
        });
    }
};
