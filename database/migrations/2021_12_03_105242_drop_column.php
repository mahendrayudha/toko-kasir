<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::dropIfExists('member');
        Schema::dropIfExists('pembelian');
        Schema::dropIfExists('pembelian_detail');
        Schema::dropIfExists('pengeluaran');
        Schema::dropIfExists('penjualan');
        Schema::dropIfExists('penjualan_detail');
        Schema::dropIfExists('produk');
        Schema::dropIfExists('kategori');
        Schema::dropIfExists('supplier');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
