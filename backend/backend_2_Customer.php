<?php

class Customer
{
  private $id;
  private $emailAddress;
  private $phoneNumber;
  private $shippingAddress;
  private $billingAddress;
  private $purchases;
  private $paymentCards;
  private $cart;
  private $customerStatus;
  private $newsletters;
  private $surveys;
  private $first_name;
  private $last_name;
  private $password;
  private $hash;
  private $active;
  private $emails;

function __construct(){
  $this->id = $id;
  $this->name = $name;
  $this->emailAddress = $emailAddress;
  $this->phoneNumber = $phoneNumber;
  $this->shippingAddress = $shippingAddress;
  $this->billingAddress = $billingAddress;
  $this->purchase = $purchases;
  $this->paymentCards = $paymentCards;
  $this->cart = $cart;
  $this->customerStatus = $customerStatus;
  $this->newsletters = $newsletters;
  $this->surveys = $surveys;
  $this->first_name = $first_name;
  $this->last_name = $last_name;
  $this->password = $password;
  $this->hash = $hash;
  $this->active = $active;
  $this->emails = $emails;
}

public function getId(){
  return $this->id;
}

public function setId($id){
  $this->id = $id;
}

public function getEmailAddress(){
  return $this->emailAddress;
}

public function setEmailAddress($emailAddress){
  $this->emailAddress = $emailAddress;
}

public function getPhoneNumber(){
  return $this->phoneNumber;
}

public function setPhoneNumber($phoneNumber){
  $this->phoneNumber = $phoneNumber;
}

public function getShippingAddress(){
  return $this->shippingAddress;
}

public function setShippingAddress($shippingAddress){
  $this->shippingAddress = $shippingAddress;
}

public function getBillingAddress(){
  return $this->billingAddress;
}

public function setBillingAddress($billingAddress){
  $this->billingAddress = $billingAddress;
}

public function getPurchases(){
  return $this->purchases;
}

public function setPurchases($purchases){
  $this->purchases = $purchases;
}

public function getPaymentCards(){
  return $this->paymentCards;
}

public function setPaymentCards($paymentCards){
  $this->paymentCards = $paymentCards;
}

public function getCart(){
  return $this->cart;
}

public function setCart($cart){
  $this->cart = $cart;
}

public function getCustomerStatus(){
  return $this->customerStatus;
}

public function setCustomerStatus($customerStatus){
  $this->customerStatus = $customerStatus;
}

public function getNewsletters(){
  return $this->newsletters;
}

public function setNewsletters($newsletters){
  $this->newsletters = $newsletters;
}

public function getSurveys(){
  return $this->surveys;
}

public function setSurveys($surveys){
  $this->surveys = $surveys;
}

public function getFirst_name(){
  return $this->first_name;
}

public function setFirst_name($first_name){
  $this->first_name = $first_name;
}

public function getLast_name(){
  return $this->last_name;
}

public function setLast_name($last_name){
  $this->last_name = $last_name;
}

public function getPassword(){
  return $this->password;
}

public function setPassword($password){
  $this->password = $password;
}

public function getHash(){
  return $this->hash;
}

public function setHash($hash){
  $this->hash = $hash;
}

public function getActive(){
  return $this->active;
}

public function setActive($active){
  $this->active = $active;
}

public function getEmails(){
  return $this->emails;
}

public function setEmails($emails){
  $this->emails = $emails;
}
//a
/*

i would just call get method from this class getFirstName and concatenate with " " and getLastName
design pattern: dependency injection
*/
  getFullName()


//b
/*

initialize ShippingAddress object and call getAddress and its getStreet method from its class
design pattern: dependency injection
*/
 getShippingStreetAddress()


//c
/*

initialize BillingAddress object and call getAddress and its getStreet method from its class
design pattern: dependency injection
*/
 getBillingStreetAddress()


//d
/*

initialize BillingAddress object and call getPostalCode method from its class
design pattern: dependency injection
*/
 getBillingPostalCode()


//e
/*

initialize ShippingAddress object and call getPostalCod method from its class
design pattern: dependency injection
*/
 getShippingPostalCode()


//f
/*

initialize ShippingAddress object and call getState method from its class
design pattern: dependency injection
*/
 getShippingState()


//g
/*

initialize BillingAddress object and call getState method from its class
design pattern: dependency injection
*/
 getBillingState()


//h
/*

initialize BillingAddress object and ShippingAddress object and call their methods from their classes and concatenate them
design pattern: dependency injection
*/
 getFullAddressAsString()


//i
/*

i would just call getter method from this class getFirstName
design pattern: dependency injection
*/
 getFirstName()


//j
/*

i would just call getter method from this class getLastName
design pattern: dependency injection
*/
 getLastName()


//k
/*

define date that  represent recent(for example one week) and getOrders from purchase table and call getDate for purchase orders and return order thar fits in that one week
design pattern: dependency injection
*/
 getRecentOrders()


//l
/*

get last order by date from purchased orders
design pattern: dependency injection
*/
 getLastOrder()


//m
/*

i would just call get method from this class getName
design pattern: dependency injection
*/
 getOrderByOrderID()

 //n
 /*

 instantiate Order class object and set Widgets that order includes it order status to created
 design pattern: dependency injection
 */
  createOrder(orderParams)


//o
/*

insantiate BillingAddress and set current address to addressParams
design pattern: dependency injection
*/
 updateBillingAddress(addressParams)


//p
/*

instantiate Newsletter object  and add it to newsletters list
design pattern: dependency injection
*/
 signUpForNewsletter()
//q
/*

instantiate survey object and send survey params
design pattern: dependency injection
*/
 submitCustomerFeedbackSurvey(surveyParams)
//r
/*

sum all user purchases and define customer status depending on it, with enumeration or something
design pattern: dependency injection
*/
 calculateCustomerValueToCompany()
//s
/*

create new email and send it
design pattern: dependency injection
*/
 sendPromotionForProduct()
//t
/*

get list of all purchased orders
design pattern: dependency injection
*/
 getAllProductsEverPurchased()
//u
/*

call above method and apply .length() function to it
design pattern: dependency injection
*/
 getNumberOfAllProductsEverPurchased()
//v
/*

get emails for user from this class
design pattern: dependency injection
*/
 getAllEmailsSentToCustomer()
//w
/*

update customer status to very_important
design pattern: dependency injection
*/
 markAsAVeryImportantCustomer()



?>
