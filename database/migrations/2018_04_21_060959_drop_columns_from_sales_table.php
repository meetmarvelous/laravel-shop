<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropColumnsFromSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sales', function (Blueprint $table) {
             if (Schema::hasColumn('sales', 'customer')) { $table->dropColumn('customer'); }
             if (Schema::hasColumn('sales', 'address')) { $table->dropColumn('address'); }
             if (Schema::hasColumn('sales', 'phone')) { $table->dropColumn('phone'); }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sales', function (Blueprint $table) {
            //
        });
    }
}
