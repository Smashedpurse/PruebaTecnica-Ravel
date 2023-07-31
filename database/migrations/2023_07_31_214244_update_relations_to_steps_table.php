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
        Schema::table('steps', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id_tasks')->nullable();; //Con esto creamos el campo ID en la tabla tasks
            $table->foreign('category_id_tasks')->references('id')->on('tasks'); //Con esto generamos la relación de la llave foranea creada la cual
                                                                                //hace referencia al id de la tabla categoría
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('steps', function (Blueprint $table) {
            $table->dropForeign(['category_id_tasks']);
            $table->dropColumn('category_id_tasks');
        });
    }
};
