<?php>
class Dog extends Canine(){

    public function eat()
    {
        return 'Dog food';
    }

    public function drink()
    {
        return 'Water';
    }

    public function speak()
    {
        return 'Barks';
    }

    public function move()
    {
        return 'Run';
    }
}