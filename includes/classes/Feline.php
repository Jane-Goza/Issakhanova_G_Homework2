<?php

/**
 * A meal is something you eat 
 */
class Feline
{
    /**
     * @var HouseCat
     */
    protected $houseHat;

    /**
     * @var Jaguar
     */
    protected $jaguar;

     /**
     * @var Lion
     */
    protected $lion;



    /**
     * Constructs a new instance of Meal, using an appetizer, a main dish and a dessert
     * 
     * @param HouseCat $houseHat
     * @param Jaguar $jaguar
     * @param Lion $lion
     */
    public function __construct(HouseCat $houseHat, Jaguar $jaguar, Lion $lion)
    {
        $this->houseCat = $houseCat;
        $this->jaguar = $jaguar;
        $this->lion = $lion;
    }

    /**
     * Shows us what eating the meal looks like
     * 
     * @return string
     */
    public function eat(): string
    {
        // grab whatever "eat"ing a houseCat, a Jaguar and a Lion looks like, and store them in a variable.
        $eatHouseCat = $this->houseCat->eat();
        $eatJaguar = $this->jaguar->eat();
        $eatLion = $this->Lion->eat();

        return $eatHouseCat . ' ' . $eatJaguar . ' ' . $eatlion;
    }


    public function drink(): string
    {
        // grab whatever "drink"ing a houseCat, a Jaguar and a Lion looks like, and store them in a variable.
        $drinkHouseCat = $this->houseCat->drink();
        $drinkJaguar = $this->jaguar->drink();
        $drinkLion = $this->lion->drink();


        return $drinkHouseCat . ' ' . $drinkJaguar  . ' ' . $drinkLion;
    }

    public function speak(): string
    {
        // grab whatever "speak"ing a HouseCat, a Jaguar and a Lion looks like, and store them in a variable.
        $speakHouseCat = $this->houseCat->speak();
        $speakJaguar = $this->jaguar->speak();
        $speakLion = $this->lion->speak();


        return $speakHouseCat . ' ' . $speakJaguar  . ' ' . $speakLion;
    }

    public function move(): string
    {
        // grab whatever "move"ing a HouseCat, a Jaguar and a Lion looks like, and store them in a variable.
        $moveHouseCat = $this->houseCat->move();
        $moveJaguar = $this->jaguar->move();
        $moveLion = $this->lion->move();

        return $moveHouseCat . ' ' . $moveJaguar  . ' ' . $moveLion;
    }
}