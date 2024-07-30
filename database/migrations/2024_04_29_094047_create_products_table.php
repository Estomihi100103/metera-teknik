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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->string('slug');
            $table->string('product_name')->nullable();
            $table->text('deskripsi')->nullable();
            $table->text('spesipikasi')->nullable();
            $table->string('sku')->unique()->nullable();
            $table->integer('price')->default(0)->nullable();
            $table->integer('discount')->default(0)->nullable();
            $table->integer('stock')->default(0)->nullable();
            $table->string('tags')->nullable();
            $table->string('image')->nullable();
            $table->text('additional_images')->nullable();
            $table->json('array_image')->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('meta_image')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->text('varian')->nullable();
            $table->text('video')->nullable();
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->foreignId('brand_id')->nullable()->constrained('brands')->nullOnDelete();
            $table->enum('status', ['active', 'inactive', 'out_of_stock'])->default('active');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['brand_id']);
            $table->dropColumn('brand_id');
            $table->dropForeign(['category_id']);
            $table->dropColumn('category_id');
        });
    }
};
