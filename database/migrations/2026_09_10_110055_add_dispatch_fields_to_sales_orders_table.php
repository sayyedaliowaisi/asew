<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('sales_orders', function (Blueprint $table) {
            $table->string('delivery_status')
                ->default('pending')
                ->after('order_status');

            $table->string('courier_name')
                ->nullable()
                ->after('delivery_status');

            $table->string('tracking_number')
                ->nullable()
                ->after('courier_name');

            $table->date('dispatch_date')
                ->nullable()
                ->after('tracking_number');

            $table->timestamp('delivered_at')
                ->nullable()
                ->after('dispatch_date');
        });
    }

    public function down(): void
    {
        Schema::table('sales_orders', function (Blueprint $table) {
            $table->dropColumn([
                'delivery_status',
                'courier_name',
                'tracking_number',
                'dispatch_date',
                'delivered_at',
            ]);
        });
    }
};