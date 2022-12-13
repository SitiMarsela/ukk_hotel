<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        CREATE TRIGGER pesan AFTER INSERT ON pemesanans FOR EACH ROW 
        BEGIN   
        UPDATE kamars SET jumlah_kamar = jumlah_kamar - NEW.jumlah WHERE id = NEW.id; 
        END ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER `pesan`');
    }
};
