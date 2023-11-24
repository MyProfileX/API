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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            // $table->integer('customer_id');

            $table->foreignId('customer_id')
                  -> constrained('customers')
                  -> cascadeOnDelete()
                  -> cascadeOnUpdate();

            $table->integer('amount');
            $table->string('status'); // Billed, Paid, Void ( Выставлен счет, оплачен, аннулирован )
            $table->dateTime('billed_date'); // Время выставления счёта
            $table->dateTime('paid_date')->nullable(); // Время оплаты счёта


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
