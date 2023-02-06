<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        if (!Schema::hasColumn('cars', 'prenume')) {
            Schema::table('cars', function (Blueprint $table) {
                $table
                                                                        ->integer('prenume')
                                                                                    ;
            });
        }
    }

    public function down()
    {
        Schema::table('cars', function (Blueprint $table) {
                            $table->dropColumn('prenume');
                    });
    }
};
