<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserrolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userroles', function (Blueprint $table) {
            $table->id();
            $table->string('rolename')->unique();
            $table->boolean('create_superdist')->default(false);
            $table->boolean('create_dist')->default(false);
            $table->boolean('create_apipartner')->default(false);
            $table->boolean('create_retailer')->default(false);
            $table->integer('no_superdist')->default('10');
            $table->integer('no_dist')->default('10');
            $table->integer('no_apipartner')->default('10');
            $table->integer('no_retailer')->default('10');
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
        Schema::dropIfExists('userroles');
    }
}
