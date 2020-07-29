<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Product\Product;

class ProductTest extends TestCase
{
    /** @test */
    public function check_product_colummns()
    {
        $product = new Product;

        $expected = [
            'product_name', 'product_desc', 'product_img',
        ];

        $arrayComparedProducts = array_diff($expected, $product->getFillable());

        $this->assertEquals(0, count($arrayComparedProducts));
    }
}
