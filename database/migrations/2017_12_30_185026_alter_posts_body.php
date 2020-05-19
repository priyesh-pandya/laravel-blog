<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterPostsBody extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
             //$table->text('body')->nullable();
             $table->text('body')->nullable()->change();
             // DB::statement('ALTER TABLE logs MODIFY `to` double(15,2) NULL;');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->text('body')->nullable(false)->change();
            //DB::statement('ALTER TABLE logs MODIFY `to` double(15,2) NOT NULL;');
        });
    }
}
