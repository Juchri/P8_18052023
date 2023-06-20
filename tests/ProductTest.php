<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class ProductTest extends TestCase
{
    /**
     * @dataProvider pricesForFoodProduct
     */
    public function testcomputeTVAFoodProduct($price, $expectedTva)
    {
                $product = new Product('Un produit', Product::FOOD_PRODUCT, $price);
                        $this->assertSame($expectedTva, $product->computeTVA());
    }
    public function pricesForFoodProduct()
    {
        return [
            [0, 0.0],
            [20, 1.1],
            [100, 5.5]
        ];
    }

    public function testDefault()
    {
        $product = new Product('Pomme', 'food', 1);
                                 $this->assertSame(0.055, $product->computeTVA());
    }

    public function testComputeTVAOtherProduct()
    {
        $product = new Product('Un autre produit', 'Un autre type de produit', 100);
        $this->assertSame(19.6, $product->computeTVA());
    }

    public function testNegativePriceComputeTVA() //Ne fonctionne pas
    {
       $product = new Product('Un produit', Product::FOOD_PRODUCT, -20);
       $this->expectException('Exception');
       $product->computeTVA();
       //$this->assertSame(19.6, $product->computeTVA());
    }
}