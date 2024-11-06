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
    Schema::table('writers', function (Blueprint $table) {
    $table->string('image')->nullable()->after('bio'); 
    });
    }

    public function down()
    {
    Schema::table('writers', function (Blueprint $table) {
    $table->dropColumn('image'); 
    });
    }

};
