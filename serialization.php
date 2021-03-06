<?php
/*
	对象串行化（序列化)

*/
	echo '对象串行化（序列化）<br><br>';

	class Person{
		var $name;
		var $age;
		var $sex;
		var $marr = array('aaa', 'bbb', 'ccc');

		function __construct($name, $age, $sex){
			$this->name = $name;
			$this->age = $age;
			$this->sex = $sex;
		}

		function say(){
			echo "我的名字是：{$this->name}，我的年龄是：{$this->age}，我的性别是：{$this->sex}。<br>";
		}

		function __toString(){
			return 'aaaaaaaaaaa<br>';
		}

		function __destruct(){
			echo "{$this->name} #########<br>";
		}

		function __clone(){
			$this->name = '克隆';
			$this->age = 0;
		}

		function __call($method, $args){
			if(in_array($method, $this->marr)){
				echo $args[0].'<br>';
			}else{
				echo "你调用的方法{$method}() 不存在<br>";
			}
		}
	}
