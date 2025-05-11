<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBalanceToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // Yeni balance sütunu ekleniyor
            $table->decimal('balance', 8, 2)->default(0); // 8 toplam basamak, 2 ondalıklı basamak
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // Eğer geri alınırsa, balance sütunu silinir
            $table->dropColumn('balance');
        });
    }
}
