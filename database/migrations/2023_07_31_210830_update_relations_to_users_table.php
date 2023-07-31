<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id')->nullable();; //Con esto creamos el campo ID en la tabla users
            $table->foreign('category_id')->references('id')->on('todo_list'); //Con esto generamos la relación de la llave foranea creada la cual
                                                                                //hace referencia al id de la tabla todo_list                                                                        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
            $table->dropColumn('category_id');       
 });
    }
};
