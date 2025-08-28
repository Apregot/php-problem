<?

class Bird {
    public function fly() {
        echo "Flying high in the sky!\n";
    }
    public function layAnEgg() {
        echo "Laying an egg!\n";
    } 
}

class Fish {
    public function swim() {
        echo "Swimming in the water!\n";
    }
    //метать икру
    public function spawn() {
        echo "Spawning!\n";
    }
}

// 1 вариант
class Penguin extends Bird, Fish {
}



// 2 вариант
class Penguin extends Bird {
    public function swim() {
        echo "Penguin swimming in the water!\n";
    }
}

$penguin = new Penguin();
$penguin->swim();
$penguin->fly();