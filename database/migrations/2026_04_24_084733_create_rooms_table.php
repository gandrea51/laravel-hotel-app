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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Es: "Suite Presidenziale" o "Camera 101"
    
            // Usiamo enum per limitare le scelte ed evitare errori di battitura
            $table->enum('type', ['single', 'double', 'suite', 'deluxe'])->default('double');
            
            // 8 cifre totali, 2 dopo la virgola (max 999.999,99)
            $table->decimal('price_per_night', 8, 2); 
            
            // Un booleano è molto più veloce da interrogare
            $table->boolean('is_available')->default(true);
            
            // Aggiunte utili:
            $table->integer('capacity')->default(2); // Quante persone ci stanno?
            $table->text('description')->nullable(); // Una breve descrizione
            $table->string('image')->nullable();     // Il percorso della foto
    
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
        Schema::dropIfExists('rooms');
    }
};
