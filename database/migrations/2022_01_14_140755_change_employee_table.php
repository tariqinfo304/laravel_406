<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employee', function (Blueprint $table) {
            $table->string('name', 500)->change();
            $table->renameColumn('desc', 'desc_detail');
            $table->dropColumn('cpga');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employee', function (Blueprint $table) {
            $table->string('name', 100)->change();
            $table->renameColumn('desc_detail', 'desc');
            $table->float("cgpa");
        });
    }
}
