<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id('task_id');
            $table->integer('id');
            $table->string('site')->nullable();
            $table->string('link_page')->unique();
            $table->string('title');
            $table->longText('desc')->nullable();
            $table->text('anons')->nullable();
            $table->string('category')->nullable();
            $table->integer('price_value')->nullable();
            $table->string('price_type')->nullable();
            $table->string('price_valuta')->nullable();
            $table->integer('maxprice')->nullable();
            $table->dateTime('date_in')->nullable();
            $table->integer('response')->nullable();
            $table->integer('view')->nullable();
            $table->json('tags')->nullable();
            $table->boolean('safe')->nullable();
            $table->boolean('success')->nullable();
            $table->boolean('urgent')->nullable();
            $table->integer('feedback_plus')->nullable();
            $table->integer('feedback_minus')->nullable();
            $table->integer('finished')->nullable();
            $table->integer('in_work')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('user_login')->nullable();
            $table->string('user_fio')->nullable();
            $table->boolean('forAll')->nullable();
            $table->boolean('isHidden')->nullable();
            $table->boolean('isVacancy')->nullable();
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
        Schema::dropIfExists('tasks');
    }
}
