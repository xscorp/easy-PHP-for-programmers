<?php			//starting of every php code, otherwise it won't be interpreted

	echo "<h1>basic PHP7 for people who have previously programmed</h1>";

	//to create a variable, just add '$' before variable name
	$variable = 11;		//global scope variable

	function basic_php7()			//defining the function, same as javascript
	{
		$variable=5;	//local scope variable

		// '.' can be used the same way as '+' in python(for appending strings)
		//php can print HTML as written below
		echo "<p>Local scope variable: " .  $variable . "</p>";
		echo "<br>";		//for line break using HTML's <br> tag
		
		//to access a global variable, use $GLOBALS["variable_name"]
		//btw you may use echo or echo() , both works the same
		echo("Global scope variable: ".  $GLOBALS["variable"]);
		echo "<br><br><br>";	//for some new lines
	
		
		//demostration of creating a static variable in php7
		static $test_static_variable = 5;
		++$test_static_variable;			//incrementing the value 
		echo "Value of test_static variable at current call: " . $test_static_variable. "<br>";

		//demonstration of creating a constant variable in php7
		//it is done using the define("variable name" , "value" , "case-sensitive = true/false")
		//third argument is optional which is set to false by default, we can omit it.
		define("sample_constant_variable" , 25);
		echo "<br><br>Value of constant variable: " . sample_constant_variable. "<br>";

		//[NOTE]: 
		//notice that we didn't placed '$' sign before the constant variable. Yup, it doesn't require that!
		//Also, you it's worth remembering that constant variable has a global scope by default!

	}

	function use_of_print()
	{
		echo "<br><br><h1>Use of print()</h1>";
		print "Hello world! using print ' ' <br>";
		print("Hello world using print(' ')"); 

		//[IGNORE IT IF YOU ARE BEGINNER IN CODING]
		//difference between echo and print is that :
			//echo accepts many arguments while print accepts only one
			//echo doesn't return any value while print does, i.e. '1'
			//echo is faster than print as there isn't much stuff going inside
	}


	function data_types()
	{
		echo "<br><br><h1>Data Types in PHP7</h1>";
		echo "*String <br>*Integer <br>*Float (floating point numbers - also called double) <br>*Boolean";
		echo "*Array <br>*Object <br>*NULL <br>*Resource";
		echo "<br><br><b>Examples</b>";
		echo "<br><br>";
		
		//string variable
		$variable_string = "Hello world!";
		var_dump($variable_string);		//function to display the type of data in variable
		echo "<br>";
		
		//integer
		$variable_integer = 50;
		var_dump($variable_integer);
		echo "<br>";
		
		//float
		$variable_float = 13.45;
		var_dump($variable_float);
		echo "<br>";

		//boolean
		$variable_boolean = true; 		//'true' or 'false'
		var_dump($variable_boolean);
		echo "<br>";

		//array
		$friends = array("Shashank" , "Manish" , "Saurav");
		var_dump($friends);
		echo "<br>";

		//object: Not written here as it is a bit advance topic for beginners and requires understanding of classes
		
		//null
		$variable_null = null;			//btw, default value of an uninitialized variable in php is NULL
		var_dump($variable_null);
		echo "<br>";

		//resource: ADVANCE TOPIC, NOT MENTIONED ( used for accessing outside resources )
	}


	function strings_in_php()
	{
		echo "<br><br><h1>String functions in php7</h1>";
		
		$sample_string = "My name is Shashank";

		//strlen(variable) is used for determining the length of the string
		echo "Length of the string is : " . strlen($sample_string) . "<br>";

		//str_word_count(variable) is used to count total number of words in a string
		echo "Total no. of words in string: " . str_word_count($sample_string) . "<br>";

		//strrev(variable) is used for displaying the reversed string
		echo "Reverse of the string is: " . strrev($sample_string) . "<br>";

		//strpos(variable , text) is used for finding "text" in the variable. Returns index if found, else false
		echo "Is text inside the string? : " . strpos($sample_string , "shank") . "<br>";

		//str_replace(var1, var2, string) finds 'var1' in 'string' and replaces it with 'var2'
		echo "String after replacing 'name' with 'style' is : " . str_replace("name" , "style" , $sample_string) . "<br>";
	}


	function conditions_and_loops()
	{
		echo "<br><br><br><h1>Conditional and iteration statements</h1>";
		
		//if condition
		echo "<br><br><b>if-elseif-else:</b><br>";
		$variable = 7;
		if($variable == 5)
		{
			echo "Value is 5";
		}
		elseif($variable == 7)
		{
			echo "Now you entered 7";
		}
		else
		{
			echo "Oops! It's neither 5 nor 7";
		}

		echo "<br><br><b>switch-case:</b><br>";
		//switch-case (same as C/C++)
		//for demonstration, I will write the switch-case equivalent of above if-else condition
		$variable = 7;
		switch($variable)
		{
			case 5: echo "Value is 5";
					break;
			case 7: echo "Now you entered 7";
					break;
			default:echo "Oops! It's neither 5 nor 7";
		}
		//I guess the code is pretty self explainatory and doesn't require further explaination


		//now let's learn loops. Following is the program for printing numbers from 1 to 10.
		//The code is same as every other language.
		echo "<br><br><b>while loop:</b><br>";
		$variable = 1;
		while($variable <= 10)
		{
			echo "$variable  ";
			$variable++;
		}



		/*  Now it's time for for-loops. There isn't any difference between while and for loops,
			it's just the we write them(syntax). For demonstration, I will write the equivalent code
			of above while-loop code using for-loop */
		echo "<br><br><b>for loop:</b><br>";
		for($variable = 1; $variable <=10; $variable++)
		{
			echo "$variable   ";
		}



		/*  do-while loop is same as while loop except that it runs ones before checking the condition.
			If you didn't understand what that means, you should google the stuff as it worth learning. 
			I will write the equivalent code of above loop codes using do-while loop */
			echo "<br><br><b>do-while loop:</b><br>";
		$variable = 1;
		do
		{
			echo "$variable   ";
			$variable++;
		} while($variable <= 10);
		/*  Yup, syntax is NEARLY same as the while loop syntax but you should notice that a semicolon ';'
			is placed after while() statement which is not the case with while loops. Remember that! Again,
			it's exactly same as in the languages like C/C++ */

		

		/*  Now, we are gonna discuss the last loop, the foreach loop. It does one simple task.
			It iterates through every element of an ARRAY(yes, only array) stores that value in a variable 
			for operations. */
		echo "<br><br><b>foreach loop:</b><br>";
		$phones = array("nokia" , "samsung" , "xiaomi" , "htc");
		foreach($phones as $name)
		{
			echo "$name ,  ";
		}
	}



	function functions_in_php1($accepted_variable1 , $accepted_variable2) : int		//this ': int' is here for declaring return type. It's optional, used for return type checking
	{
		/*We have already seen how a function looks like since every part of this code is organised
		in the form of functions. But what we didn't mentioned is how to use arguments of a function, 
		how to return a value from the function. */
		echo "<br><br><h1>Functions</h1><br>";
		echo "<b>with arguments without data type:</b><br>";
		echo "Passed arguments:   " . "$accepted_variable1" . "  and   " . "$accepted_variable2<br>";
		$multiplication = $accepted_variable1 * $accepted_variable2;
		return $multiplication;			//returning the value back to the function call
	}
	/*we can also optionally add data type before the variable name, but that doesn't help that much
	until strict checking isn't there! The following code is same as the above code, just the data 
	tye is placed before each accepted argument and second variable has a default argument.*/
	function functions_in_php2(int $accepted_variable1 , int $accepted_variable2 = 10)	//here, accepted_variable2 has a default argument
	{
		/*We have already seen how a function looks like since every part of this code is organised
		in the form of functions. But what we didn't mentioned is how to use arguments of a function */
		echo "<br><br><b>with arguments with data type:</b><br>";
		echo "Passed arguments:   " . "$accepted_variable1" . "  and   " . "$accepted_variable2<br>";
		$multiplication = $accepted_variable1 * $accepted_variable2;
		return $multiplication;
	}
	/*[VERY IMPORTANT NOTE!]:
	Data types are very loose in PHP. That means if you attempted to add a string to an integer, it won't complain.
	$data = 5 + "7 seas"; --> this will add 5 and int(7) and output will be 5+7=12.
	To avoid these kinda things and force a strict type checking, we need to write the normal <?php at the starting
	as:
	<?php declare(strict_types = 1);
	...
	...
	...
	?> 
	and now, php will give a fatal error in case it encounters any such weird expression. */
	


	//to call a function, syntax is same as other languages: "function_name();"
	basic_php7();			//function to demonstrate basic php7 syntax along with types of scopes in variables [LINE 6] 
	basic_php7();			//calling the function many times to check change in static variable
	basic_php7();

	use_of_print();	//function to demonstrate the use of print() , print " " function [LINE: 28]
	data_types();	//function to demonstrate all the data types in PHP7 [LINE: 44]
	strings_in_php();	//function to demonstrate many useful string functions that can be used to manipulate strings in php7
	conditions_and_loops();	//function to demonstrate conditional statements and iteration statements like if-else, for loop etc.
	
	//function
	echo "Value returned from function: " . functions_in_php1(5 , 6) . "<br>";
	echo "Value returned from function: " . functions_in_php2(10 , 20) . "<br>";


//a php code must end with the sign below(question mark and greater than sign)
?>			