<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        if (!Schema::hasColumn('dealers', 'status2')) {
            Schema::table('dealers', function (Blueprint $table) {
                $table
                                                                        ->string('status2', 255)
                                                                                    ;
            });
        }
    }

    public function down()
    {
        Schema::table('dealers', function (Blueprint $table) {
                            $table->dropColumn('status2');
                    });
    }
};
