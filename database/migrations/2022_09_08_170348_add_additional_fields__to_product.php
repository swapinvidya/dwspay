<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAdditionalFieldsToProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->boolean('default')->default(true);
            $table->boolean('taxable')->default(false);
            $table->float('tax')->defult(0);
            $table->boolean('shipping')->default(false);
            $table->float('shipping_rate')->defult(0);
            $table->boolean('discount')->default(false);
            $table->float('discount_rate')->defult(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('default');
            $table->dropColumn('taxable');
            $table->dropColumn('tax');
            $table->dropColumn('shipping');
            $table->dropColumn('shipping_rate');
            $table->dropColumn('discount');
            $table->dropColumn('discount_rate');
        });
    }
}
