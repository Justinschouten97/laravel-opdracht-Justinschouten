<?php


namespace spec;


class PrimeFactorsSpec2 {

    function it_returns_an_something()
    {
        $this->generate(1)->shouldReturn([]);
        $this->generate(2)->shouldReturn([2]);
        $this->generate(3)->shouldReturn([3]);
        $this->generate(4)->shouldReturn([2, 2]);
        $this->generate(5)->shouldReturn([5]);
        $this->generate(6)->shouldReturn([2, 3]);
        $this->generate(8)->shouldReturn([2, 2, 2]);
        $this->generate(9)->shouldReturn([3, 3]);
        $this->generate(100)->shouldReturn([2, 2, 5, 5]);
    }
}
