<?php

namespace Vox\Treinamento\Tdd\Tests;

/**
 * @author Joel <joel@voxtecnologia.com.br>
 * @group Calc
 */
class CalcTest extends AbstractCalcTestCase
{
	private $calc;

	public function setUp()
	{
		$this->calc = new \Vox\Treinamento\Tdd\Calc();
	}

	public function testAdicao()
	{
		$this->assertEquals($this->calc->somar(5,5), 10);
	}

	/**
	* @expectedException \InvalidArgumentException
	*/
	public function testSomarValorInvalidoA()
	{
		$this->calc->somar("5",5);
	}

	/**
	* @expectedException \InvalidArgumentException
	*/
	public function testSomarValorInvalidoB()
	{
		$this->calc->somar(5,"5");
	}

	public function testSubtracao()
	{
		$this->assertEquals($this->calc->subtrair(5,5), 0);
	}

	public function testMultiplicacao()
	{
		$this->assertEquals($this->calc->multiplicar(5,5), 25);
	}

	public function testDivisao()
	{
		$this->assertEquals($this->calc->dividir(5,5), 1);
	}

	/**
	 * @expectedException \InvalidArgumentException
	 */
	public function testDivisaoPorZero()
	{
		$this->calc->dividir(5,0);
	}

	public function testPow()
	{
		$this->assertEquals($this->calc->potencia(2,2), 4);
	}

    /**
	 * @expectedException \InvalidArgumentException
	 */
	public function testPoValorInvalido()
	{
		$this->calc->potencia(2,"2");
	}
}