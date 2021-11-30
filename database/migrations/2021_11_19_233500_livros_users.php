<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LivrosUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livros_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_users');
            $table->string('id_livros');
            $table->timestamps();
            $table->updated_at();
            $table->criated_at();
            
        });

        Schema::table('livros_users', function (Blueprint $table) {
            $table->foreing('id_users')->references('id')->on("users")->onDelete('cascade');
            $table->foreing('id_livros')->references('id')->on("livros")->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
