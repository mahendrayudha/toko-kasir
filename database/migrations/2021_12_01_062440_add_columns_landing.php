<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsLanding extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('landing_pages', function (Blueprint $table) {
            $table->string('url_googleplay')->after('footer_desc');
            $table->string('url_appstore')->after('footer_desc');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('landing_pages', function (Blueprint $table) {
            //
        });
    }
}
