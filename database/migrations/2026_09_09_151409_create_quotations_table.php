<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('quotations', function (Blueprint $table) {

            $table->id();

            $table->foreignId('product_enquiry_id')
                ->nullable()
                ->constrained('product_enquiries')
                ->nullOnDelete();

            $table->string('quotation_number')->unique();

            $table->string('customer_name');
            $table->string('company')->nullable();
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('city')->nullable();

            $table->decimal('subtotal', 12, 2)->default(0);
            $table->decimal('discount', 12, 2)->default(0);

            $table->decimal('gst_percent', 5, 2)->default(18);
            $table->decimal('gst_amount', 12, 2)->default(0);

            $table->decimal('grand_total', 12, 2)->default(0);

            $table->unsignedInteger('validity_days')->default(15);

            $table->text('notes')->nullable();
            $table->text('terms')->nullable();

            $table->string('status')->default('draft');

            $table->date('quotation_date');
            $table->date('valid_until')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('quotations');
    }
};