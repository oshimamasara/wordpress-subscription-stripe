<?php
  require_once('vendor/autoload.php');
  //echo '1-';
  \Stripe\Stripe::setApiKey('sk_test_yhtn1Zf4hN6nawNnENMJY2Uz00yZGfuFQS');
  //echo '2-';
  $name = $_POST['name'];
  $email = $_POST['email'];
  $token = $_POST['stripeToken'];
  //echo $name."\n";
  //echo $email."\n";
  //echo $token;

 // Create Customer In Stripe
 $customer = \Stripe\Customer::create(array(
   "name" => $name,
   "email" => $email,
   "source" => $token
 ));
 //echo '3-';

// $subsc = \Stripe\Subscription::create([
$subsc = \Stripe\Subscription::create([
    "customer" => $customer->id,
    //"email" => $customer->email,
    //"name" => $customer->name,

    //'price' => 'price_HJL8sVu1YpBPcc',
    'items' => [['price' => 'price_HJL8sVu1YpBPcc']],
    //'items' => [['plan' => 'price_HJL8sVu1YpBPcc']],
  ]);


// Customer Data
$customerData = [
    'id' => $subsc->customer,
    'name' => $name,
    'email' => $email
  ];
  
  // Transaction Data
  $transactionData = [
    'id' => $subsc->id,
    'customer_id' => $subsc->customer,
    'product' => $subsc->description,
    'status' => $subsc->status,
  ];
  
  // Redirect to success
//  header('Location: success_subsc.php?tid='.$subsc->id.'&product='.$subsc->description);
//header('Location: ' . $_SERVER['HTTP_REFERER']);  前のページ
header('Location: https://youtube.o-namae.com/%e3%81%82%e3%82%8a%e3%81%8c%e3%81%a8%e3%81%86%e3%81%94%e3%81%96%e3%81%84%e3%81%be%e3%81%97%e3%81%9f/?tid='.$subsc->id);