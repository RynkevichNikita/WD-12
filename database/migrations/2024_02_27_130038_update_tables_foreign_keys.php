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
        Schema::table('payments', function (Blueprint $table) {
            $table->dropForeign(['customerNumber']);
            $table->foreign('customerNumber')
                    ->references('customerNumber')
                    ->on('customers')
                    ->cascadeOnDelete();
        });

        Schema::table('orders', function (Blueprint $table) {
            $table->dropForeign(['customerNumber']);
            $table->foreign('customerNumber')
                    ->references('customerNumber')
                    ->on('customers')
                    ->cascadeOnDelete();
        });

        Schema::table('orderdetails', function (Blueprint $table) {
            $table->dropForeign(['orderNumber']);
            $table->foreign('orderNumber')
                    ->references('orderNumber')
                    ->on('orders')
                    ->cascadeOnDelete();
                        
            $table->dropForeign(['productCode']);
            $table->foreign('productCode')
                    ->references('productCode')
                    ->on('products')
                    ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
