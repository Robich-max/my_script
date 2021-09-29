<?php




// welcome email variables: {store_name}

$config["welcome_email_subject"] = "welcome to our {store_name}";
$config['welcome_email_button_text'] = "explore more ";
$config['welcome_email_button_link'] = "home";


// paid order email variables: {name} for full name, {order_number}

$config["paid_email_subject"] = "thank you for your order";
$config['paid_email_button_text'] = "explore more ";
$config['paid_email_button_link'] = "home";

// refund order email variables: {name} for full name, {order_number}

$config["refund_email_subject"] = "you order has been refunded";
$config['refund_email_button_text'] = "explore more ";
$config['refund_email_button_link'] = "home";

// Fulfilled order email variables: {name} for full name, {order_number}

$config["shipped_email_subject"] = "you order has been shipped ";
$config['shipped_email_button_text'] = "explore more ";
$config['shipped_email_button_link'] = "home";

// Payment request email variables: {name} for full name, {order_number}

$config["payment_email_subject"] = "thank you for your order";
$config['payment_email_button_text'] = "explore more ";
$config['payment_email_button_link'] = "home";


// Abandoned cart email variables: {name} for full name 

$config["cart_email_subject"] = "you didn't complete your order click here to complete it : {name}";
$config['cart_email_button_text'] = "explore more ";
$config['cart_email_button_link'] = "home";