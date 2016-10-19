<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('post_id')->unsigned()->comment('���');
            $table->integer('parent_id')->comment('������id');
            $table->string('parent_name')->comment('�����۱���');
            $table->string('username')->comment('�������û���');
            $table->string('email')->comment('����������');
            $table->string('blog')->comment('�����߲��͵�ַ');
            $table->text('content')->comment('��������');
            $table->timestamps();
            //Comment����post_id�ֶ���Ϊ�������Postһ�Զ��ϵ
            $table->foreign('post_id')
                ->references('id')
                ->on('posts')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comments',function(Blueprint $table){
            $table->dropForeign('comments_post_id_foreign');
        });

        Schema::drop('comments');
    }
}
