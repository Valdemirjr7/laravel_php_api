<?php
/**************************************************/
/*2020_07_18_142057_create_products_table.php     */
/*================================================*/
/*   BACK-END API IN PHP WITH LARAVEL FRAMEWORK   */
/*================================================*/
/*                   Credits                      */
/*              Valdemir Valance Jr               */
/*================================================*/
/*                Social Linktree                 */
/*         linktr.ee/valdemirvalencajr            */
/**************************************************/
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name')->require();
            $table->string('product_desc')->require();
            $table->string('product_img')->require();
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
        Schema::dropIfExists('products');
    }
}
