<?

class Bird {
    public function fly() {
        echo "Flying high in the sky!\n";
    }
}

class Swimmer {
    public function swim() {
        echo "Swimming in the water!\n";
    }
}

// 1 вариант
class Penguin extends Bird, Swimmer {
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