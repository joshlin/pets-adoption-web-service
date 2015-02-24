<?php

if(isset($_REQUEST['spec']))
{//check to be sure data has been transmitted via GET or POST
	switch($_REQUEST['spec'])
	{//determine contents of 'spec'
		case "cat":
			include('data/cats.js'); //display all cats
			break;
		case "dog":
			include('data/dogs.js'); //display all dogs
			break;
		default:
			include('data/all_pets.js'); //default dispaly all pets
	}
}else{//if not data sent, inform calling application
	echo "Incorrect parameter sent";
}
