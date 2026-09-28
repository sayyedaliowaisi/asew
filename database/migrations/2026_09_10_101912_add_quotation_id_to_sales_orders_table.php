<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        /*
        |--------------------------------------------------------------------------
        | Compatibility Migration
        |--------------------------------------------------------------------------
        |
        | Some earlier ASEW database states did not contain quotation_id.
        | Newer sales_orders creation already includes it.
        |
        | Therefore only add the column when it is actually missing.
        |
        */

        if (
            Schema::hasTable('sales_orders') &&
            !Schema::hasColumn('sales_orders', 'quotation_id')
        ) {
            Schema::table('sales_orders', function (Blueprint $table) {
                $table->foreignId('quotation_id')
                    ->nullable()
                    ->unique()
                    ->constrained('quotations')
                    ->nullOnDelete();
            });
        }
    }


    public function down(): void
    {
        /*
        |--------------------------------------------------------------------------
        | Safe Rollback
        |--------------------------------------------------------------------------
        */

        if (
            Schema::hasTable('sales_orders') &&
            Schema::hasColumn('sales_orders', 'quotation_id')
        ) {
            Schema::table('sales_orders', function (Blueprint $table) {
                $table->dropForeign(['quotation_id']);
                $table->dropUnique(['quotation_id']);
                $table->dropColumn('quotation_id');
            });
        }
    }
};