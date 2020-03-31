<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('title');
            $table->text('description');
            // $table->date('Y-m-d H:i:s');
            // $table->timestamp('created_at');
            // $table->date_create('createdAt')->default(DB::raw('CURRENT_TIMESTAMP'));
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table){

        });
    }
}
