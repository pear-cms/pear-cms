<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterAccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::connection('auth')->table('account', function ($table) {
            if ( ! Schema::connection('auth')->hasColumn('account', 'remember_token')) {
                $table->string('remember_token', 100)->nullable();
            }

            if (config('trinitycore-auth.passport')) {
                $table->string('password');
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('auth')->table('account', function ($table) {
            $table->dropColumn('remember_token');
            if (Schema::connection('auth')->hasColumn('account', 'password')) {
                $table->dropColumn('password');
            }
        });
    }
}
