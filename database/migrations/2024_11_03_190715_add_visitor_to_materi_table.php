<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
    Schema::table('materi', function (Blueprint $table) {
    $table->integer('visitor')->default(0)->after('content');
    });
    }

    public function down()
    {
    Schema::table('materi', function (Blueprint $table) {
    $table->dropColumn('visitor'); 
    });
    }

};
