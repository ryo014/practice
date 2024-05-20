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
        Schema::create('menu', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->constrained();
            $table->date('date')->nullable();
            $table->string('staple',30);
            $table->string('main_dish',30);
            $table->string('side_dish1',30);
            $table->string('side_dish2',30);
            $table->string('etc1',30);
            $table->string('etc2',30);
            $table->text('comment');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu');
    }
};
