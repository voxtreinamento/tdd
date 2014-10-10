<?php

namespace Vox\Treinamento\Tdd;


class FizzBuzz
{
    const FIZZ = 'fizz';
    const BUZZ = 'buzz';

    public function verificaBuzz($numero)
    {
        if (!$numero) {
            throw new \InvalidArgumentException('O número deve ser um inteiro.');
        }

        if (!is_int($numero)) {
            throw new \InvalidArgumentException('O número deve ser um inteiro.');
        }

        if ($this->mod3($numero) && $this->mod5($numero)) {
            return static::FIZZ . static::BUZZ;
        }

        if ($this->mod5($numero)) {
            return static::BUZZ;
        }

        if ($this->mod3($numero)) {
            return static::FIZZ;
        }

        return $numero;
    }

    private function mod3($numero)
    {
        return !($numero % 3);
    }

    private function mod5($numero)
    {
        return !($numero % 5);
    }

}