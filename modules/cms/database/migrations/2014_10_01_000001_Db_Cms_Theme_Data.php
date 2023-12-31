<?php

use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

return new class extends Migration
{
    public function up()
    {
        Schema::create('cms_theme_data', function (Blueprint $table) {
            $table->increments('id');
            $table->string('theme')->nullable()->index();
            $table->mediumText('data')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cms_theme_data');
    }
};
