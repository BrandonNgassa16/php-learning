# Hello World Autos - Payment Plan

This repository contains the code for the "Hello World Autos" payment plan page. The code is located in the `master` branch.

## Overview

The `payment-plan.php` file generates a personalized payment plan for a vehicle purchase. It dynamically displays details such as the vehicle's make, model, price, repayment duration, interest rate, total payment, total interest, and monthly payment. The calculations are performed using PHP functions, and the data is passed via an HTML form using the `POST` method.

### Key Features:
- Displays vehicle details (image, make, model, and price).
- Calculates and displays:
  - Total payment (principal + interest).
  - Total interest.
  - Monthly payment.
- Uses PHP functions like `calculateTotalPayment()` and `calculateTotalInterest()` for financial calculations.
- Includes a responsive design using Bootstrap.

### Code Location

The full code for the payment plan page is located in the `master` branch. Below is a snippet of the code for reference:

```php
<!doctype html>

<!-- Web page "Hello World Autos"       -->
<!-- Created by Harrison Kong           -->
<!-- Copyright (C) Coursera 2021        -->

<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv=“Pragma” content=”no-cache”>
<meta http-equiv=“Expires” content=”-1″>
<meta http-equiv=“CACHE-CONTROL” content=”NO-CACHE”>
<!-- CSS Stylesheets -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="css/payment-plan.css">
<?php include "utilities.php" ?>

<title>Hello World Autos</title>   

</head>

<body>

    <h1>Your Personalised Payment Plan</h1>
    <!-- Additional code continues here -->
```

For the complete code, please check the `payment-plan.php` file in the `master` branch.

## How to Use

1. Clone the repository:
   ```bash
   git clone https://github.com/your-username/HelloWorldAutos.git
   ```
2. Switch to the `master` branch:
   ```bash
   git checkout master
   ```
3. Open the `payment-plan.php` file in a local server environment (e.g., XAMPP, WAMP, or a PHP server).

Feel free to explore and modify the code as needed!
