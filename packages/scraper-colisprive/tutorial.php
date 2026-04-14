<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://www.colisprive.com/Externe/WSCP.asmx?wsdl',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc...
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://www.colisprive.com/Externe/WSCP.asmx?wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Scraper\ScraperColisPrive\ClassMap::get(),
);
/**
 * Samples for Test ServiceType
 */
$test = new \Scraper\ScraperColisPrive\ServiceType\Test($options);
$test->setSoapHeaderAuthenticationHeader(new \Scraper\ScraperColisPrive\StructType\AuthenticationHeader());
/**
 * Sample call for TestService operation/method
 */
if ($test->TestService(new \Scraper\ScraperColisPrive\StructType\TestService()) !== false) {
    print_r($test->getResult());
} else {
    print_r($test->getLastError());
}
/**
 * Samples for Set ServiceType
 */
$set = new \Scraper\ScraperColisPrive\ServiceType\Set($options);
$set->setSoapHeaderAuthenticationHeader(new \Scraper\ScraperColisPrive\StructType\AuthenticationHeader());
/**
 * Sample call for SetParcel operation/method
 */
if ($set->SetParcel(new \Scraper\ScraperColisPrive\StructType\SetParcel()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for SetContainer operation/method
 */
if ($set->SetContainer(new \Scraper\ScraperColisPrive\StructType\SetContainer()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for SetShipment operation/method
 */
if ($set->SetShipment(new \Scraper\ScraperColisPrive\StructType\SetShipment()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Sample call for SetPickupPointDelivery operation/method
 */
if ($set->SetPickupPointDelivery(new \Scraper\ScraperColisPrive\StructType\SetPickupPointDelivery()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Samples for Cancel ServiceType
 */
$cancel = new \Scraper\ScraperColisPrive\ServiceType\Cancel($options);
$cancel->setSoapHeaderAuthenticationHeader(new \Scraper\ScraperColisPrive\StructType\AuthenticationHeader());
/**
 * Sample call for CancelParcel operation/method
 */
if ($cancel->CancelParcel(new \Scraper\ScraperColisPrive\StructType\CancelParcel()) !== false) {
    print_r($cancel->getResult());
} else {
    print_r($cancel->getLastError());
}
/**
 * Samples for Get ServiceType
 */
$get = new \Scraper\ScraperColisPrive\ServiceType\Get($options);
$get->setSoapHeaderAuthenticationHeader(new \Scraper\ScraperColisPrive\StructType\AuthenticationHeader());
/**
 * Sample call for GetParcel operation/method
 */
if ($get->GetParcel(new \Scraper\ScraperColisPrive\StructType\GetParcel()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetDeliveryCalendar operation/method
 */
if ($get->GetDeliveryCalendar(new \Scraper\ScraperColisPrive\StructType\GetDeliveryCalendar()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetPickupPoint operation/method
 */
if ($get->GetPickupPoint(new \Scraper\ScraperColisPrive\StructType\GetPickupPoint()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetPickupPointsList operation/method
 */
if ($get->GetPickupPointsList(new \Scraper\ScraperColisPrive\StructType\GetPickupPointsList()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Samples for Setnd ServiceType
 */
$setnd = new \Scraper\ScraperColisPrive\ServiceType\Setnd($options);
$setnd->setSoapHeaderAuthenticationHeader(new \Scraper\ScraperColisPrive\StructType\AuthenticationHeader());
/**
 * Sample call for Set2ndDelivery operation/method
 */
if ($setnd->Set2ndDelivery(new \Scraper\ScraperColisPrive\StructType\Set2ndDelivery()) !== false) {
    print_r($setnd->getResult());
} else {
    print_r($setnd->getLastError());
}
/**
 * Samples for Update ServiceType
 */
$update = new \Scraper\ScraperColisPrive\ServiceType\Update($options);
$update->setSoapHeaderAuthenticationHeader(new \Scraper\ScraperColisPrive\StructType\AuthenticationHeader());
/**
 * Sample call for UpdateParcelStatus operation/method
 */
if ($update->UpdateParcelStatus(new \Scraper\ScraperColisPrive\StructType\UpdateParcelStatus()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
