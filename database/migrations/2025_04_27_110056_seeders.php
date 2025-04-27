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
        Shema::create( "seeders" ,function(Blueprint $table) {
                $table->id()->autoIncrement();
                $table->string("name");
                $table->integer("marks"); 
        }
    );
        //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Shema::DropIfExists('seeders');
    }
};
