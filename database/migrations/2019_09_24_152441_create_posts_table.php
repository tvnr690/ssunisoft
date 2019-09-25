<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('pid');
            $table->integer('p_author');
            $table->string('p_title');
            $table->string('p_slug');
            $table->integer('p_cat_id');
            $table->integer('p_sub_cat_id');
            $table->integer('p_tag_id')->nullable();
            $table->text('p_banner');
            $table->text('p_viedo_url')->nullable();
            $table->longText('p_content');
            $table->integer('p_status')->default(0);
            $table->bigInteger('p_like_count')->nullable();
            $table->bigInteger('p_comment_count')->nullable();
            $table->bigInteger('p_view_count')->nullable();
            $table->integer('p_delete_status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
