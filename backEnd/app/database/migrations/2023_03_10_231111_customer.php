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
        Schema::create("customer", function( $table ) {
            $table->id();
            $table->string( "username", 100)->unique();
            $table->string( "first_name", 100 );
            $table->string( "last_name", 100 );
            $table->string( "email", 100 );
            $table->string( "password", 255 );
            $table->string( "phone_number", 9 );
            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
