<?php
	include 'classes/recipe.php';
	include 'classes/render.php';
	$recipe1 = new Recipe("my first recipe");
	$recipe1->setSource("Alena Holligan");
	$recipe1->addIngredient("egg",1);
	$recipe1->addIngredient("flour",2,"cup");

	$recipe2 = new Recipe("My Second Recipe\n");
	$recipe2->setSource("Chidiebere Ekennia");
	
	$recipe1->addInstruction("This is my First Instruction");
	$recipe1->addInstruction("This is my Second Instruction");

	$recipe1->addtag("Breakfast");
	$recipe1->addtag("Main Course");


	$recipe1->setYield("6 Servings");
	echo $recipe1;
	// echo Render::displayRecipe($recipe1);

?>