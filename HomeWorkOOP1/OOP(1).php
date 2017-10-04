<?php header('Content-type: text/html; charset=utf-8'); ?>
<?
ini_set('display_error', true);
error_reporting(E_ALL);

echo "<b>Задача №1</b> - Сделайте класс Worker, в котором будут следующие public поля - name (имя), age (возраст), salary (зарплата).
Создайте объект этого класса, затем установите поля в следующие значения (не в __construct, а для созданного объекта) - имя 'Иван', возраст 25, зарплата 1000. Создайте второй объект этого класса, установите поля в следующие значения - имя 'Вася', возраст 26, зарплата 2000.
Выведите на экран сумму зарплат Ивана и Васи. Выведите на экран сумму возрастов Ивана и Васи.
</br></br>";

class Worker
{
	public $name;
	public $age;
	public $salary;

}

$worker1 = new Worker();
$worker1->name = "Иван";
$worker1->age = "25"; 
$worker1->salary = "1000"; 

$worker2 = new Worker();
$worker2->name = "Вася";
$worker2->age = "26"; 
$worker2->salary = "2000";

echo "Сумма возрастов Ивана и Васи составляет: ".($worker1->age+$worker2->age)."</br>";
echo "Сумма зарплаты Ивана и Васи составляет: ".($worker1->salary+$worker2->salary)."</br>";
echo "</br><hr>";


echo "<b>Задача №2</b> - Сделайте класс Worker, в котором будут следующие private поля - name (имя), age (возраст), salary (зарплата) и следующие public методы setName, getName, setAge, getAge, setSalary, getSalary.Создайте 2 объекта этого класса: 'Иван', возраст 25, зарплата 1000 и 'Вася', возраст 26, зарплата 2000.Выведите на экран сумму зарплат Ивана и Васи. Выведите на экран сумму возрастов Ивана и Васи.

</br></br>";

class Worker1
{
	private $name;
	private $age;
	private $salary;

	public function setName($name)
	{
		$this->name = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setAge($age)
	{
		$this->age = $age; 
	}

	public function getAge()
	{
		return $this->age;
	}

	public function setSalary($salary)
	{
		$this->salary = $salary;
		
	}

	public function getSalary()
	{
		return $this->salary;
	}
}

$worker3 = new Worker1();
$worker3->setName("Иван");
$worker3->setAge(25);
$worker3->setSalary(1000);

$worker4 = new Worker1();
$worker4->setName("Вася");
$worker4->setAge(26);
$worker4->setSalary(2000);

echo "Сумма возрастов Ивана и Васи составляет: ".($worker3->getAge()+$worker4->getAge())."</br>";
echo "Сумма зарплаты Ивана и Васи составляет: ".($worker3->getSalary()+$worker4->getSalary())."</br>";
echo "</br><hr>";


echo "<b>Задача №3</b> - Дополните класс Worker1 из предыдущей задачи private методом checkAge, который будет проверять возраст на корректность (от 1 до 100 лет). Этот метод должен использовать метод setAge перед установкой нового возраста (если возраст не корректный - он не должен меняться).</br></br>";

class Worker2
{
	private $name;
	private $age;
	private $salary;

	public function setName($name)
	{
		$this->name = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setAge($age) 
	{ 
		if ($this->checkAge($age)) 
		{ 
		$this->age = $age; 
		} 
	} 

	public function getAge()
	{
		return $this->age;
	}

	private function checkAge($age)
	{
		return ($age >=1 && $age < 100); 
	}

	public function setSalary($salary)
	{
		$this->salary = $salary;
		
	}

	public function getSalary()
	{
		return $this->salary;
	}
}

$worker5 = new Worker2();
$worker5->setName("Иван");
$worker5->setAge(25);
$worker5->setSalary(1000);

$worker6 = new Worker2();
$worker6->setName("Вася");
$worker6->setAge(26);
$worker6->setSalary(2000);

echo "Сумма возрастов Ивана и Васи составляет: ".($worker5->getAge()+$worker6->getAge())."</br>";
echo "Сумма зарплаты Ивана и Васи составляет: ".($worker5->getSalary()+$worker6->getSalary())."</br>";
echo "</br><hr>";


echo "<b>Задача №4</b> - Сделайте класс Worker, в котором будут следующие private поля - name (имя), salary (зарплата). Сделайте так, чтобы эти свойства заполнялись в методе __construct при создании объекта (вот так: new Worker(имя, возраст) ). Сделайте также public методы getName, getSalary.Создайте объект этого класса 'Дима', возраст 25, зарплата 1000. Выведите на экран произведение его возраста и зарплаты..</br></br>";

class Worker3
{
	private $name;
	private $salary;

	public function __construct()
	{
		$this->name = "Дима";
		$this->salary = 1000;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getSalary()
	{
		return $this->salary;
	}
}

$worker7 = new Worker3();
$worker7->age = 25;

echo "Сума возраста и сумма зарплаты составляет: ".($worker7->getSalary()+$worker7->age)."</br>";
echo "</br><hr>";


echo "<b>Задача №5</b> - Сделайте класс User, в котором будут следующие protected поля - name (имя), age (возраст), public методы setName, getName, setAge, getAge.
Сделайте класс Worker, который наследует от класса User и вносит дополнительное private поле salary (зарплата), а также методы public getSalary и setSalary.
Создайте объект этого класса 'Иван', возраст 25, зарплата 1000. Создайте второй объект этого класса 'Вася', возраст 26, зарплата 2000. Найдите сумму зарплата Ивана и Васи.
Сделайте класс Student, который наследует от класса User и вносит дополнительные private поля стипендия, курс, а также геттеры и сеттеры для них.
 Сделайте класс Driver (Водитель), который будет наследоваться от класса Worker из предыдущей задачи. Этот метод должен вносить следующие private поля: водительский стаж, категория вождения (A, B, C).</br></br>";

 
 class User
 {
 	
 	protected $name;
 	protected $age;

 	public function setName($name)
 	{
 		$this->name = $name;
 	}

 	public function getName()
 	{
 		return $this->name;
 	}

 	public function setAge($age)
 	{
 		$this->age = $age;
 	}

 	public function getAge()
 	{
 		return $this->age;
 	}
 }

 class Worker4 extends User
 {
 	private $salary;

 	public function setSalary($salary)
 	{
 		$this->salary = $salary;
 	}

 	public function getSalary()
 	{
 		return $this->salary;
 	}
 }
 $worker8 = new Worker4();
 $worker8->setName("Иван");
 $worker8->setAge(25);
 $worker8->setSalary(1000);

 $worker9 = new Worker4();
 $worker9->setName("Вася");
 $worker9->setAge(26);
 $worker9->setSalary(2000);

echo "Сумма зарплаты Ивана и Васи составила: ".($worker8->getSalary()+$worker9->getSalary())."</br></br>";


echo "Сделайте класс Student, который наследует от класса User и вносит дополнительные private поля стипендия, курс, а также геттеры и сеттеры для них.
 Сделайте класс Driver (Водитель), который будет наследоваться от класса Worker из предыдущей задачи. Этот метод должен вносить следующие private поля: водительский стаж, категория вождения (A, B, C).</br></br>";

 class Student extends User
 {
 	private $grand;
 	private $course;

 	public function setGrand($scholarship)
 	{
 		$this->grand = $grand;
 	}

 	public function getGrand()
 	{
 		return $this->grand; 
 	}

 	public function setCourse($cuorse)
 	{
 		$this->course = $course;
 	}

 	public function getCourse()
 	{
 		return $this->grand;
 	}
 }
$student = new Student();


class Driver extends Worker
{ 
	private $stage; 
	private $category; 

}
$driver = new Driver();

?>