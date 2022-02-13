<?php

class Bird
{
    /**
     * @var Parrot
     */
    protected $parrot;

    /**
     * @var Cardinal
    */
    protected $cardinal;

    /**
     * Constructs a new instance of Bird, using a parrot and a cardinal
     * 
     * @param Parrot $parrot
     * @param Cardinal $cardinal
     */

    public function __construct(Parrot $parrot, Cardinal $cardinal)
    {
        $this->parrot = $parrot;
        $this->cardinal = $cardinal;
    }

    /**
     * Shows us what eating, drinking, speaking, moving looks like
     * 
     * @return string
     */

     /**
     * Shows us what eating, drinking, speaking, moving looks like
     * 
     * @return string
     */

    public function eat(): string
    {
        // grab whatever "eat"ing a parrot and a cardinal looks like, and store them in a variable.
        $eatParrot = $this->parrot->eat();
        $eatCardinal = $this->cardinal->eat();

        return $eatParrot . ' ' . $eatCardinal;
    }

    public function drink(): string
    {
        // grab whatever "drink"ing a parrot and a cardinal looks like, and store them in a variable.
        $drinkParrot = $this->parrot->drink();
        $drinkCardinal = $this->cardinal->drink();


        return $drinkParrot . ' ' . $drinkCardinal;
    }

    public function speak(): string
    {
        // grab whatever "speak"ing a parrot and a cardinal looks like, and store them in a variable.
        $speakParrot = $this->parrot->speak();
        $speakCardinal = $this->cardinal->speak();


        return $speakParrot . ' ' . $speakCardinal;
    }

    public function move(): string
    {
        // grab whatever "move"ing a parrot and a cardinal looks like, and store them in a variable.
        $moveParrot = $this->parrot->move();
        $moveCardinal = $this->cardinal->move();

        return $moveParrot . ' ' . $moveCardinal;
    }

}