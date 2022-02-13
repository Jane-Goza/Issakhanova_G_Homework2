<?php>
class Dog extends Feline(){

    public function eat()
    {
        return 'Cat food';
    }

    public function drink()
    {
        return 'Water';
    }

    public function speak()
    {
        return 'Mews';
    }

    public function move()
    {
        return 'Run';
    }
}