<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book', function (Blueprint $table) {
            $table->id();
            $table->String('title');
            $table->String('slug')->unique();
            $table->String('description');
            $table->String('author');
            $table->String('publisher');
            $table->String('cover');
            $table->Float('price');
            $table->Integer('views');
            $table->Integer('stock');
            $table->Enum('status' , ['publish' , 'draft']);
            $table->Integer('created_by');
            $table->Integer('deleted_by');
            $table->Integer('updated_by');
            $table->Integer('deleted_at');
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
        Schema::dropIfExists('book');
    }
};
