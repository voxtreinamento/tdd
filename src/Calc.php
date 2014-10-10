<?php

namespace Vox\Treinamento\Tdd;

/**
 * @author Joel <joel@voxtecnologia.com.br>
 * @group Calc
 */

class Calc
{
	public function somar($valorA, $valorB)
	{
		$this->validar($valorA, $valorB);

		return $valorA + $valorB;
	}

	public function subtrair($valorA, $valorB)
	{
		$this->validar($valorA, $valorB);

		return $valorA - $valorB;
	}

	public function dividir($valorA, $valorB)
	{
		$this->validar($valorA, $valorB);

		if ($valorB === 0) {
			throw new \InvalidArgumentException("Divisão por zero não é possível");
		}

		return $valorA / $valorB;
	}

	public function multiplicar($valorA, $valorB)
	{
		$this->validar($valorA, $valorB);

		return $valorA * $valorB;
	}

	public function potencia($base, $exp)
	{
		$this->validar($base, $exp);

		return pow($base, $exp);
	}

	private function validarValor($valor)
	{
		return (!is_double($valor) && !is_int($valor));
	}

	private function validar($valorA, $valorB)
	{
		if ($this->validarValor($valorA)) {
			throw new \InvalidArgumentException("Valor invalido para A");
		}

		if ($this->validarValor($valorB)) {
			throw new \InvalidArgumentException("Valor invalido para B");
		}
	}
}