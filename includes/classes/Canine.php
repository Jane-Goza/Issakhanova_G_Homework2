<?php

/**
 * A meal is something you eat 
 */
class Canine
{
    /**
     * @var Wolf //define the type/completion of code
     */
    protected $wolf;

    /**
     * @var Dog
     */
    protected $dog;



    /**
     * Constructs a new instance of Meal, using an wolf and a dog
     * 
     * @param Wolf $wolf
     * @param Dog $dog
     */
    public function __construct(Wolf $wolf, Dog $dog)
    {
        $this->wolf = $wolf;
        $this->dog = $dog;
    }

    /**
     * Shows us what eating the meal looks like
     * 
     * @return string
     */
    public function eat(): string
    {
        // grab whatever "eat"ing the appetizer, main and dessert looks like, and store them in a variable.
        $eatWolf = $this->wolf->eat();
        $eatDog = $this->dog->eat();

        return $eatWolf . ' ' . $eatDog;
    }


    public function drink(): string
    {
        // grab whatever "drink"ing a Wolf, a dogand a bird looks like, and store them in a variable.
        $drinkWolf = $this->wolf->drink();
        $drinkDog = $this->dog->drink();


        return $drinkWolf . ' ' . $drinkDog;
    }

    public function speak(): string
    {
        // grab whatever "speak"ing a wolf, a dog and a bird looks like, and store them in a variable.
        $speakWolf = $this->wolf->speak();
        $speakDog = $this->dog->speak();


        return $speakWolf . ' ' . $speakDog;
    }

    public function move(): string
    {
        // grab whatever "move"ing a wolf, a dog and a bird looks like, and store them in a variable.
        $moveWolf = $this->wolf->move();
        $moveDog = $this->dog->move();

        return $moveWolf . ' ' . $moveDog;
    }
}