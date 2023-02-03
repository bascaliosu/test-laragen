<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        if (!Schema::hasColumn('dealers', 'status3')) {
            Schema::table('dealers', function (Blueprint $table) {
                $table
                                                                        ->string('status3', 255)
                                                                                    ;
            });
        }
    }

    public function down()
    {
        Schema::table('dealers', function (Blueprint $table) {
                            $table->dropColumn('status3');
                    });
    }
};
