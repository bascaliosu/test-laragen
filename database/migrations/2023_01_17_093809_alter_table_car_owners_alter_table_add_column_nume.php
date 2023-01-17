<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('car_owners', function (Blueprint $table) {
            $table
                                                            ->string('nume', 255)
                                                ;
        });
    }

    public function down()
    {
        Schema::table('car_owners', function (Blueprint $table) {
                            $table->drop_column('nume');
                    });
    }
};
