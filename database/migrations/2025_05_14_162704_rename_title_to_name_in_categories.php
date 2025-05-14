<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameNameToTitleInCategories extends Migration
{
    public function up()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->renameColumn('name', 'title');
        });
    }

    public function down()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->renameColumn('title', 'name');
        });
    }
}
