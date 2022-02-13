<?php>
class Parrot extends Bird(){

    public function eat()
    {
        return 'Parrots seed and fruits';
    }

    public function drink()
    {
        return 'Water';
    }

    public function speak()
    {
        return 'Chirp';
    }

    public function move()
    {
        return 'fly';
    }
}