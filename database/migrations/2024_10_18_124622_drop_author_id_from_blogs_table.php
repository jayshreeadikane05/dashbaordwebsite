<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropAuthorIdFromBlogsTable extends Migration
{
    public function up()
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->dropForeign(['author_id']); // Drop foreign key if exists
            $table->dropColumn('author_id'); // Drop the author_id column
        });
    }

    public function down()
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->unsignedBigInteger('author_id')->after('tag'); // Re-add column
            $table->foreign('author_id')->references('id')->on('admin_users')->onDelete('cascade'); // Set foreign key again
        });
    }
}
