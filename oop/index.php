<?
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
header('Content-type: text/html; charset=utf-8');

//Наследование, инкапсуляция, полиморфизм

/*class Animal {
  public $color;
  public $nick;
  public $gender;
  public $canEat;
  public $type;
  public $pair;
  
  function __construct($type, $nick, $gender, $color, $canEat, $pair = null) {
    //Функция, которая вызывается при создании нового экземпляра объекта текущего класса
    $this->type = $type;
    $this->nick = $nick;
    $this->gender = $gender;
    $this->color = $color;
    $this->canEat = $canEat;
    $this->pair = $pair;
  }
  
  function walk() {
    echo "$this->nick гуляет";
  }
  
  function eat($food) {
    if( in_array($food, $this->canEat) ) {
      echo "$this->nick ест $food";
    } else {
      echo "$food неподходящая еда для $this->nick, предложите более подходящую еду";
    }
    
  }
  
  function sleep() {
    echo "$this->nick уснул. Zzzzz...";
  }
  
}

$animal = new Animal(); //Создаем экземляр объекта
echo $animal->nick . "<br>";
$animal->walk();

$rabbit = new Animal("Заяц", "Косой", "М", "Серый", ["трава", "морковь", "капуста"]);
echo "$rabbit->nick, $rabbit->type $rabbit->color, $rabbit->gender <br>";
$rabbit->nick = "Банни";
echo "$rabbit->nick, $rabbit->type $rabbit->color, $rabbit->gender <br>";
$rabbit->walk();
echo "<br>";
$rabbit->eat("морковь");
echo "<br>";
$rabbit->eat("лягушка");
echo "<br>";
$rabbit->sleep();
echo "<br>";

$rabbit2 = new Animal("Заяц", "Боннита", "Ж", "Белый", ["трава", "морковь", "капуста"], $rabbit);
$rabbit->pair = $rabbit2;

$pairName = $rabbit->pair->nick; 
echo "$rabbit->nick живет в паре с $pairName <br>";
$rabbit2->pair->walk();*/
//Полиморфизм (интерфейсы)
interface AnimalInterface {
  public function walk();
  public function eat($food);
  public function sleep();
}

//Наследование
abstract class Animal implements AnimalInterface {
  //Создавать экземпляр класса Animal мы не можем - он абстрактный
  //Модификаторы доступа
  //public - публичное - св-во или метод доступны извне
  //private - приватное - св-во или метод доступны только внутри текущего класса
  //protected - защищенное - св-во или метод доступны только внутри текущего класса и классов-наследников
  private $color;
  public $nick;
  private $gender;
  protected $canEat;
  public $pair;
  
  public function __construct($nick, $gender, $color, $pair = null) {
    //Функция, которая вызывается при создании нового экземпляра объекта текущего класса
    $this->nick = $nick;
    $this->gender = $gender;
    $this->color = $color;
    $this->pair = $pair;
  }
  
  public function getGender() { //Геттер
    return $this->gender;
  }
  
  public function setGender($gender) {
    echo "Вы - живодер :c";
    $this->gender = $gender;
  }
  
  public function getColor() {
    return $this->color;
  }
  
  public function getAllowedFood() {
    return $this->canEat;
  }
  
  public function setAllowedFood($food) { //Сеттер
    if(is_array($food) && count($food > 0)) {
      $this->canEat = $food;
    }
  }
  
  public function walk() {
    echo "$this->nick гуляет";
  }
  
  public function eat($food) {
    if( in_array($food, $this->canEat) ) {
      echo "$this->nick ест $food";
    } else {
      echo "$food неподходящая еда для $this->nick, предложите более подходящую еду";
    }
    
  }
  
  public function sleep() {
    echo "$this->nick уснул. Zzzzz...";
  }
  
  private function changeColor($color) {
    $this->color = $color;
  }
}

class Rabbit extends Animal {
  private $color;
  public $nick;
  private $gender;
  protected $canEat;
  public $pair;
  
  function __construct($nick, $gender, $color) {
    parent::__construct($nick, $gender, $color); //Вызываем конструктор родителя
    $this->canEat = ["трава", "морковь", "капуста"];
  }
  
  public static function getInfo() {
    return "Информция о кроликах";
  }
  
  function jump() {
    echo "$this->nick делает хоп-хоп-хоп"; 
  }
}

class LuckyRabbit extends Rabbit {
  
  function jump() {
    parent::jump();
    echo "<br> Вы ощущаете удачу)"; 
  }
}

$bunny = new Rabbit("Банни", "М", "Серый");
echo $bunny->nick . "<br>";
$bunny->eat("морковь");
echo "<br>";
$bunny->jump();
echo "<br>";
$bonnita = new LuckyRabbit("Боннита", "Ж", "Белый");
$bonnita->jump();
echo "<br>";
echo $bunny->getGender();

echo Rabbit::getInfo(); //Вызываем статический метод
