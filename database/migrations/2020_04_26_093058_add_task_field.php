<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTaskField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table->string('date_in')->nullable()->change();

            $table->boolean('isBusiness')->nullable();
            $table->integer('total')->nullable();
            $table->boolean('timeOut')->nullable();
            $table->boolean('isSpecial')->nullable();

            $table->index(['id', 'site']);
            $table->index('link_page');
        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table->dateTime('date_in')->nullable()->change();

            $table->dropColumn('isBusiness');
            $table->dropColumn('total');
            $table->dropColumn('timeOut');
            $table->dropColumn('isSpecial');
        });

    }
}
