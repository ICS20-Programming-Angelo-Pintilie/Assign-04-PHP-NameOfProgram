<?php 
$var = '// Copyright (c) 2022 Angelo Pintilie All rights reserved
//
// Created by: Angelo Pintilie
// Created on: April 2022
// This file contains the JS functions for index.html

"use strict"

/**
 * This function displays the final cost depending on size and toppings added.
 */
function displayCost() {
  	// initialize constants
	const HST = 0.13
  const SMALL = 4.50
  const REG = 7.00
  const LARGE = 8.50
  const BROWN_SUGAR = 1.15
  const RAINBOW = 0.90
  const CRYSTAL = 1.00
  const REG_PEARL = 0.85
  const ICE = 0.00
// initialize variables
  let tax = 0
  let finalOrder = "Your final order: "
  let price = 0
  let priceTaxed = 0
	// get the size of bubble tea the user wants 
	let sizeBoba = document.getElementById(\'sizeBoba\');
	let bobaSize = sizeBoba.options[sizeBoba.selectedIndex].value;

	if (bobaSize == "small") {
		price = price + SMALL;
    finalOrder = finalOrder + "<br><b>Small Bubble Tea price $" + 
 SMALL.toFixed(2) + "</b>"
	}
else if (bobaSize == "reg") {
		price = price + REG;
    finalOrder = finalOrder + "<br><b>Regular/Medium Bubble Tea price $" + 
 REG.toFixed(2) + "</b>"
	}
  else if(bobaSize == "large"){		
		price = price + LARGE
    finalOrder = finalOrder + "<br><b>Large Bubble Tea price $" + 
 LARGE.toFixed(2) + "</b>"
	}
      // code for add-ins
  let bsbChosen = document.getElementById("BROWN_SUGAR").checked;  
  if (bsbChosen){  
    price = price + BROWN_SUGAR;
    finalOrder = finalOrder + "<br> Brown sugar added";
  }  
  
  let cbChosen = document.getElementById("CRYSTAL").checked;  
  if (cbChosen){
    price = price + CRYSTAL;
    finalOrder = finalOrder + "<br> Crystal boba added";
  }  

  let rjChosen = document.getElementById("RAINBOW").checked;  
  if (rjChosen){  
    price = price + RAINBOW;
    finalOrder = finalOrder + "<br> Rainbow jelly added";
  }  

  let rpChosen = document.getElementById("REG_PEARL").checked;  
  if (rpChosen){  
    price = price + REG_PEARL;
    finalOrder = finalOrder + "<br> Regular boba added";
  }  

  let iceChosen = document.getElementById("ICE").checked; 
  if (iceChosen){  
    price = price + ICE;
    orderSummary = orderSummary + "<br> Ice added";
  } 
  tax = price * HST;
  priceTaxed = price + tax;

  
  // display the costs of the order
  // display order summary
  document.getElementById(\'finalOrder\').innerHTML = "<h3>" + finalOrder +  "</h3>";
  // display subtotal price of order
  document.getElementById(\'displayTotal\').innerHTML = "<p>The order\'s subtotal is $" + price.toFixed(2) + "</p>";
  // display tax price of order
  document.getElementById(\'displayTax\').innerHTML = "<p>Your order\'s tax will be $" + tax.toFixed(2) + "</p>";
  // display total price of order
  document.getElementById(\'displayPriceTaxed\').innerHTML = "<p>The full order will cost $" + priceTaxed.toFixed(2) + "</p>";
}';
