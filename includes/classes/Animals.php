<?php

class Animals
{
     /**
     * @var Canine
     */
    protected $canine;

    /**
     * @var Feline
    */
    protected $feline;

    /**
     * @var Bird
    */
    protected $bird;

    /**
     * Constructs a new instance of Animals, using a canine, a feline and a bird
     * 
     * @param Canine $canine 
     * @param Feline $feline
     * @param Bird $bird
     */

    public function __construct(Canine $canine, Feline $feline, Bird $bird)
    {
        $this->canine = $canine;
        $this->feline = $feline;
        $this->bird = $bird;
    }
    /**
     * Shows us what eating,drinking,speaking and moving animals looks like
     * 
     * @return string
     */
    public function eat(): string
    {
        // grab whatever "eat"ing a canine, a feline and a bird looks like, and store them in a variable.
        $eatCanine = $this->canine->eat();
        $eatFeline = $this->feline->eat();
        $eatBird = $this->bird->eat();

        return $eatCanine . ' ' . $eatFeline . ' ' . $eatBird;
    }

    public function drink(): string
    {
        // grab whatever "eat"ing a canine, a feline and a bird looks like, and store them in a variable.
        $drinkCanine = $this->canine->drink();
        $drinkFeline = $this->feline->drink();
        $drinkBird = $this->bird->drink();

        return $drinkCanine . ' ' . $drinkFeline . ' ' . $drinkBird;
    }

    public function speak(): string
    {
        // grab whatever "eat"ing a canine, a feline and a bird looks like, and store them in a variable.
        $speakCanine = $this->canine->speak();
        $speakFeline = $this->feline->speak();
        $speakBird = $this->bird->speak();

        return $speakCanine . ' ' . $speakFeline . ' ' . $speakBird;
    }

    public function move(): string
    {
        // grab whatever "eat"ing a canine, a feline and a bird looks like, and store them in a variable.
        $moveCanine = $this->canine->move();
        $moveFeline = $this->feline->move();
        $moveBird = $this->bird->move();

        return $moveCanine . ' ' . $moveFeline . ' ' . $moveBird;
    }
}