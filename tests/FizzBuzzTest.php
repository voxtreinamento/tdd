<?php

namespace Vox\Treinamento\Tdd\Tests;


class FizzBuzzTest extends AbstractFizzBuzzTestCase
{
    public function testRetornoCorreto()
    {
        $fizzbuzz = new \Vox\Treinamento\Tdd\FizzBuzz();
        $this->assertEquals($fizzbuzz->verificaBuzz(1), 1);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testRetornoIncorretoString()
    {
        $fizzbuzz = new \Vox\Treinamento\Tdd\FizzBuzz();
        $this->assertEquals($fizzbuzz->verificaBuzz("abc"), 1);
        $this->assertEquals($fizzbuzz->verificaBuzz("1"), 1);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testRetornoIncorretoFloat()
    {
        $fizzbuzz = new \Vox\Treinamento\Tdd\FizzBuzz();
        $this->assertEquals($fizzbuzz->verificaBuzz(1.0), 1);
        $this->assertEquals($fizzbuzz->verificaBuzz(1.1), 1);
    }

    public function testRetornoSaidaCorretaFizz()
    {
        $fizzbuzz = new \Vox\Treinamento\Tdd\FizzBuzz();
        $this->assertEquals($fizzbuzz->verificaBuzz(1), 1);
        $this->assertEquals($fizzbuzz->verificaBuzz(2), 2);
        $this->assertEquals($fizzbuzz->verificaBuzz(3), "fizz");
    }

    public function testRetornoSaidaCorretaBuzz()
    {
        $fizzbuzz = new \Vox\Treinamento\Tdd\FizzBuzz();
        $this->assertEquals($fizzbuzz->verificaBuzz(4), 4);
        $this->assertEquals($fizzbuzz->verificaBuzz(5), "buzz");
    }

    public function testRetornoSaidaCorretaFizzBuzz()
    {
        $fizzbuzz = new \Vox\Treinamento\Tdd\FizzBuzz();
        $this->assertEquals($fizzbuzz->verificaBuzz(15), "fizzbuzz");
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testEntradaZero()
    {
        $fizzbuzz = new \Vox\Treinamento\Tdd\FizzBuzz();
        $this->assertEquals($fizzbuzz->verificaBuzz(0), "fizzbuzz");
    }
}