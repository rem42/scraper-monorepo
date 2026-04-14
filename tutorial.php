<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://e-station.cargonet.software/dpd-eprintwebservice/eprintwebservice.asmx?wsdl',
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
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://e-station.cargonet.software/dpd-eprintwebservice/eprintwebservice.asmx?wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Scraper\ScraperDPD\ClassMap::get(),
);
/**
 * Samples for Is ServiceType
 */
$is = new \Scraper\ScraperDPD\ServiceType\Is($options);
$is->setSoapHeaderUserCredentials(new \Scraper\ScraperDPD\StructType\UserCredentials());
/**
 * Sample call for isAlive operation/method
 */
if ($is->isAlive(new \Scraper\ScraperDPD\StructType\IsAlive()) !== false) {
    print_r($is->getResult());
} else {
    print_r($is->getLastError());
}
/**
 * Sample call for IsPickableOnDate operation/method
 */
if ($is->IsPickableOnDate(new \Scraper\ScraperDPD\StructType\IsPickableOnDate()) !== false) {
    print_r($is->getResult());
} else {
    print_r($is->getLastError());
}
/**
 * Sample call for IsDeliverableOnDate operation/method
 */
if ($is->IsDeliverableOnDate(new \Scraper\ScraperDPD\StructType\IsDeliverableOnDate()) !== false) {
    print_r($is->getResult());
} else {
    print_r($is->getLastError());
}
/**
 * Sample call for IsCustomerBlocked operation/method
 */
if ($is->IsCustomerBlocked(new \Scraper\ScraperDPD\StructType\IsCustomerBlocked()) !== false) {
    print_r($is->getResult());
} else {
    print_r($is->getLastError());
}
/**
 * Samples for Set ServiceType
 */
$set = new \Scraper\ScraperDPD\ServiceType\Set($options);
$set->setSoapHeaderUserCredentials(new \Scraper\ScraperDPD\StructType\UserCredentials());
/**
 * Sample call for setAlive operation/method
 */
if ($set->setAlive(new \Scraper\ScraperDPD\StructType\SetAlive()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
/**
 * Samples for Verify ServiceType
 */
$verify = new \Scraper\ScraperDPD\ServiceType\Verify($options);
$verify->setSoapHeaderVerifyUserCredentials(new \Scraper\ScraperDPD\StructType\VerifyUserCredentials());
$verify->setSoapHeaderUserCredentials(new \Scraper\ScraperDPD\StructType\UserCredentials());
/**
 * Sample call for VerifyConfiguration operation/method
 */
if ($verify->VerifyConfiguration(new \Scraper\ScraperDPD\StructType\VerifyConfiguration()) !== false) {
    print_r($verify->getResult());
} else {
    print_r($verify->getLastError());
}
/**
 * Sample call for VerifyClient operation/method
 */
if ($verify->VerifyClient(new \Scraper\ScraperDPD\StructType\VerifyClient()) !== false) {
    print_r($verify->getResult());
} else {
    print_r($verify->getLastError());
}
/**
 * Samples for Create ServiceType
 */
$create = new \Scraper\ScraperDPD\ServiceType\Create($options);
$create->setSoapHeaderUserCredentials(new \Scraper\ScraperDPD\StructType\UserCredentials());
/**
 * Sample call for CreateShipment operation/method
 */
if ($create->CreateShipment(new \Scraper\ScraperDPD\StructType\CreateShipment()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateShipmentBc operation/method
 */
if ($create->CreateShipmentBc(new \Scraper\ScraperDPD\StructType\CreateShipmentBc()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateShipmentWithLabels operation/method
 */
if ($create->CreateShipmentWithLabels(new \Scraper\ScraperDPD\StructType\CreateShipmentWithLabels()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateShipmentWithLabelsBc operation/method
 */
if ($create->CreateShipmentWithLabelsBc(new \Scraper\ScraperDPD\StructType\CreateShipmentWithLabelsBc()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateMultiShipment operation/method
 */
if ($create->CreateMultiShipment(new \Scraper\ScraperDPD\StructType\CreateMultiShipment()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateMultiShipmentBc operation/method
 */
if ($create->CreateMultiShipmentBc(new \Scraper\ScraperDPD\StructType\CreateMultiShipmentBc()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateReverseInverseShipment operation/method
 */
if ($create->CreateReverseInverseShipment(new \Scraper\ScraperDPD\StructType\CreateReverseInverseShipment()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateReverseInverseShipmentBc operation/method
 */
if ($create->CreateReverseInverseShipmentBc(new \Scraper\ScraperDPD\StructType\CreateReverseInverseShipmentBc()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateReverseInverseShipmentWithLabels operation/method
 */
if ($create->CreateReverseInverseShipmentWithLabels(new \Scraper\ScraperDPD\StructType\CreateReverseInverseShipmentWithLabels()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateReverseInverseShipmentWithLabelsBc operation/method
 */
if ($create->CreateReverseInverseShipmentWithLabelsBc(new \Scraper\ScraperDPD\StructType\CreateReverseInverseShipmentWithLabelsBc()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateCollectionRequest operation/method
 */
if ($create->CreateCollectionRequest(new \Scraper\ScraperDPD\StructType\CreateCollectionRequest()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreateCollectionRequestBc operation/method
 */
if ($create->CreateCollectionRequestBc(new \Scraper\ScraperDPD\StructType\CreateCollectionRequestBc()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreatePickupAtCustomer operation/method
 */
if ($create->CreatePickupAtCustomer(new \Scraper\ScraperDPD\StructType\CreatePickupAtCustomer()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Sample call for CreatePickupAtCustomerBc operation/method
 */
if ($create->CreatePickupAtCustomerBc(new \Scraper\ScraperDPD\StructType\CreatePickupAtCustomerBc()) !== false) {
    print_r($create->getResult());
} else {
    print_r($create->getLastError());
}
/**
 * Samples for Get ServiceType
 */
$get = new \Scraper\ScraperDPD\ServiceType\Get($options);
$get->setSoapHeaderUserCredentials(new \Scraper\ScraperDPD\StructType\UserCredentials());
/**
 * Sample call for GetServiceNoticeAnswers operation/method
 */
if ($get->GetServiceNoticeAnswers(new \Scraper\ScraperDPD\StructType\GetServiceNoticeAnswers()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetServiceNotices operation/method
 */
if ($get->GetServiceNotices(new \Scraper\ScraperDPD\StructType\GetServiceNotices()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetAllServiceNotices operation/method
 */
if ($get->GetAllServiceNotices(new \Scraper\ScraperDPD\StructType\GetAllServiceNotices()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetBic3 operation/method
 */
if ($get->GetBic3(new \Scraper\ScraperDPD\StructType\GetBic3()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetBic3Routing operation/method
 */
if ($get->GetBic3Routing(new \Scraper\ScraperDPD\StructType\GetBic3Routing()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetGeoRouting operation/method
 */
if ($get->GetGeoRouting(new \Scraper\ScraperDPD\StructType\GetGeoRouting()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetGeoRoutingReverse operation/method
 */
if ($get->GetGeoRoutingReverse(new \Scraper\ScraperDPD\StructType\GetGeoRoutingReverse()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetRetourShipmentData operation/method
 */
if ($get->GetRetourShipmentData(new \Scraper\ScraperDPD\StructType\GetRetourShipmentData()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetRetourShipmentDataBc operation/method
 */
if ($get->GetRetourShipmentDataBc(new \Scraper\ScraperDPD\StructType\GetRetourShipmentDataBc()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetLabel operation/method
 */
if ($get->GetLabel(new \Scraper\ScraperDPD\StructType\GetLabel()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetLabelBc operation/method
 */
if ($get->GetLabelBc(new \Scraper\ScraperDPD\StructType\GetLabelBc()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetLabelData operation/method
 */
if ($get->GetLabelData(new \Scraper\ScraperDPD\StructType\GetLabelData()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetRetourLabel operation/method
 */
if ($get->GetRetourLabel(new \Scraper\ScraperDPD\StructType\GetRetourLabel()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetRetourLabelBc operation/method
 */
if ($get->GetRetourLabelBc(new \Scraper\ScraperDPD\StructType\GetRetourLabelBc()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetShipment operation/method
 */
if ($get->GetShipment(new \Scraper\ScraperDPD\StructType\GetShipment()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetShipmentBc operation/method
 */
if ($get->GetShipmentBc(new \Scraper\ScraperDPD\StructType\GetShipmentBc()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetShipmentBcMulti operation/method
 */
if ($get->GetShipmentBcMulti(new \Scraper\ScraperDPD\StructType\GetShipmentBcMulti()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetReverseOnDemandMode operation/method
 */
if ($get->GetReverseOnDemandMode(new \Scraper\ScraperDPD\StructType\GetReverseOnDemandMode()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetLastNumber operation/method
 */
if ($get->GetLastNumber(new \Scraper\ScraperDPD\StructType\GetLastNumber()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetNationalTransitTime operation/method
 */
if ($get->GetNationalTransitTime(new \Scraper\ScraperDPD\StructType\GetNationalTransitTime()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetRdvShipmentData operation/method
 */
if ($get->GetRdvShipmentData(new \Scraper\ScraperDPD\StructType\GetRdvShipmentData()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetSafePlaceData operation/method
 */
if ($get->GetSafePlaceData(new \Scraper\ScraperDPD\StructType\GetSafePlaceData()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetCustomerAddress operation/method
 */
if ($get->GetCustomerAddress(new \Scraper\ScraperDPD\StructType\GetCustomerAddress()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetNumberRange operation/method
 */
if ($get->GetNumberRange(new \Scraper\ScraperDPD\StructType\GetNumberRange()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetNumberRangeBc operation/method
 */
if ($get->GetNumberRangeBc(new \Scraper\ScraperDPD\StructType\GetNumberRangeBc()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetCustomerProfile operation/method
 */
if ($get->GetCustomerProfile(new \Scraper\ScraperDPD\StructType\GetCustomerProfile()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetProperties operation/method
 */
if ($get->GetProperties(new \Scraper\ScraperDPD\StructType\GetProperties()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetOptionValue operation/method
 */
if ($get->GetOptionValue(new \Scraper\ScraperDPD\StructType\GetOptionValue()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetOptionValues operation/method
 */
if ($get->GetOptionValues(new \Scraper\ScraperDPD\StructType\GetOptionValues()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetShipping operation/method
 */
if ($get->GetShipping(new \Scraper\ScraperDPD\StructType\GetShipping()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getInfo operation/method
 */
if ($get->getInfo(new \Scraper\ScraperDPD\StructType\GetInfo()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Samples for Update ServiceType
 */
$update = new \Scraper\ScraperDPD\ServiceType\Update($options);
$update->setSoapHeaderUserCredentials(new \Scraper\ScraperDPD\StructType\UserCredentials());
/**
 * Sample call for UpdateServiceNotice operation/method
 */
if ($update->UpdateServiceNotice(new \Scraper\ScraperDPD\StructType\UpdateServiceNotice()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for UpdateRdvShipmentDataForShop operation/method
 */
if ($update->UpdateRdvShipmentDataForShop(new \Scraper\ScraperDPD\StructType\UpdateRdvShipmentDataForShop()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for UpdateRdvShipmentDataForAgencyPickup operation/method
 */
if ($update->UpdateRdvShipmentDataForAgencyPickup(new \Scraper\ScraperDPD\StructType\UpdateRdvShipmentDataForAgencyPickup()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for UpdateRdvShipmentData operation/method
 */
if ($update->UpdateRdvShipmentData(new \Scraper\ScraperDPD\StructType\UpdateRdvShipmentData()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for UpdateRdvShipmentDataForPredict operation/method
 */
if ($update->UpdateRdvShipmentDataForPredict(new \Scraper\ScraperDPD\StructType\UpdateRdvShipmentDataForPredict()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Sample call for UpdateRdvShipmentDataForSafePlace operation/method
 */
if ($update->UpdateRdvShipmentDataForSafePlace(new \Scraper\ScraperDPD\StructType\UpdateRdvShipmentDataForSafePlace()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Samples for Cancel ServiceType
 */
$cancel = new \Scraper\ScraperDPD\ServiceType\Cancel($options);
$cancel->setSoapHeaderUserCredentials(new \Scraper\ScraperDPD\StructType\UserCredentials());
/**
 * Sample call for CancelServiceNotice operation/method
 */
if ($cancel->CancelServiceNotice(new \Scraper\ScraperDPD\StructType\CancelServiceNotice()) !== false) {
    print_r($cancel->getResult());
} else {
    print_r($cancel->getLastError());
}
/**
 * Samples for Terminate ServiceType
 */
$terminate = new \Scraper\ScraperDPD\ServiceType\Terminate($options);
$terminate->setSoapHeaderUserCredentials(new \Scraper\ScraperDPD\StructType\UserCredentials());
/**
 * Sample call for TerminateCollectionRequest operation/method
 */
if ($terminate->TerminateCollectionRequest(new \Scraper\ScraperDPD\StructType\TerminateCollectionRequest()) !== false) {
    print_r($terminate->getResult());
} else {
    print_r($terminate->getLastError());
}
/**
 * Sample call for TerminateCollectionRequestBc operation/method
 */
if ($terminate->TerminateCollectionRequestBc(new \Scraper\ScraperDPD\StructType\TerminateCollectionRequestBc()) !== false) {
    print_r($terminate->getResult());
} else {
    print_r($terminate->getLastError());
}
/**
 * Sample call for TerminateNumberRange operation/method
 */
if ($terminate->TerminateNumberRange(new \Scraper\ScraperDPD\StructType\TerminateNumberRange()) !== false) {
    print_r($terminate->getResult());
} else {
    print_r($terminate->getLastError());
}
/**
 * Sample call for TerminateNumberRangeBc operation/method
 */
if ($terminate->TerminateNumberRangeBc(new \Scraper\ScraperDPD\StructType\TerminateNumberRangeBc()) !== false) {
    print_r($terminate->getResult());
} else {
    print_r($terminate->getLastError());
}
/**
 * Sample call for TerminateShipment operation/method
 */
if ($terminate->TerminateShipment(new \Scraper\ScraperDPD\StructType\TerminateShipment()) !== false) {
    print_r($terminate->getResult());
} else {
    print_r($terminate->getLastError());
}
/**
 * Samples for Put ServiceType
 */
$put = new \Scraper\ScraperDPD\ServiceType\Put($options);
$put->setSoapHeaderUserCredentials(new \Scraper\ScraperDPD\StructType\UserCredentials());
/**
 * Sample call for PutProperties operation/method
 */
if ($put->PutProperties(new \Scraper\ScraperDPD\StructType\PutProperties()) !== false) {
    print_r($put->getResult());
} else {
    print_r($put->getLastError());
}
/**
 * Samples for Send ServiceType
 */
$send = new \Scraper\ScraperDPD\ServiceType\Send($options);
$send->setSoapHeaderUserCredentials(new \Scraper\ScraperDPD\StructType\UserCredentials());
/**
 * Sample call for SendCNOTData operation/method
 */
if ($send->SendCNOTData(new \Scraper\ScraperDPD\StructType\SendCNOTData()) !== false) {
    print_r($send->getResult());
} else {
    print_r($send->getLastError());
}
/**
 * Samples for Check ServiceType
 */
$check = new \Scraper\ScraperDPD\ServiceType\Check($options);
$check->setSoapHeaderUserCredentials(new \Scraper\ScraperDPD\StructType\UserCredentials());
/**
 * Sample call for CheckIfReverseInverseShipmentExists operation/method
 */
if ($check->CheckIfReverseInverseShipmentExists(new \Scraper\ScraperDPD\StructType\CheckIfReverseInverseShipmentExists()) !== false) {
    print_r($check->getResult());
} else {
    print_r($check->getLastError());
}
/**
 * Sample call for CheckIfReverseInverseShipmentExistsBcId operation/method
 */
if ($check->CheckIfReverseInverseShipmentExistsBcId(new \Scraper\ScraperDPD\StructType\CheckIfReverseInverseShipmentExistsBcId()) !== false) {
    print_r($check->getResult());
} else {
    print_r($check->getLastError());
}
/**
 * Samples for Run ServiceType
 */
$run = new \Scraper\ScraperDPD\ServiceType\Run($options);
$run->setSoapHeaderUserCredentials(new \Scraper\ScraperDPD\StructType\UserCredentials());
/**
 * Sample call for runAction operation/method
 */
if ($run->runAction(new \Scraper\ScraperDPD\StructType\RunAction()) !== false) {
    print_r($run->getResult());
} else {
    print_r($run->getLastError());
}
