<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\ServiceType;

use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Update ServiceType
 */
class Update extends AbstractSoapClientBase
{
    /**
     * Sets the UserCredentials SoapHeader param
     *
     * @uses AbstractSoapClientBase::setSoapHeader()
     */
    public function setSoapHeaderUserCredentials(\Scraper\ScraperDPD\StructType\UserCredentials $userCredentials, string $namespace = 'http://www.cargonet.software', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'UserCredentials', $userCredentials, $mustUnderstand, $actor);
    }

    /**
     * Method to call the operation originally named UpdateServiceNotice
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \Scraper\ScraperDPD\StructType\UserCredentials
     * - SOAPHeaders: required
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperDPD\StructType\UpdateServiceNoticeResponse|bool
     */
    public function UpdateServiceNotice(\Scraper\ScraperDPD\StructType\UpdateServiceNotice $parameters)
    {
        try {
            $this->setResult($resultUpdateServiceNotice = $this->getSoapClient()->__soapCall('UpdateServiceNotice', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultUpdateServiceNotice;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named UpdateRdvShipmentDataForShop
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \Scraper\ScraperDPD\StructType\UserCredentials
     * - SOAPHeaders: required
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperDPD\StructType\UpdateRdvShipmentDataForShopResponse|bool
     */
    public function UpdateRdvShipmentDataForShop(\Scraper\ScraperDPD\StructType\UpdateRdvShipmentDataForShop $parameters)
    {
        try {
            $this->setResult($resultUpdateRdvShipmentDataForShop = $this->getSoapClient()->__soapCall('UpdateRdvShipmentDataForShop', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultUpdateRdvShipmentDataForShop;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named
     * UpdateRdvShipmentDataForAgencyPickup
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \Scraper\ScraperDPD\StructType\UserCredentials
     * - SOAPHeaders: required
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperDPD\StructType\UpdateRdvShipmentDataForAgencyPickupResponse|bool
     */
    public function UpdateRdvShipmentDataForAgencyPickup(\Scraper\ScraperDPD\StructType\UpdateRdvShipmentDataForAgencyPickup $parameters)
    {
        try {
            $this->setResult($resultUpdateRdvShipmentDataForAgencyPickup = $this->getSoapClient()->__soapCall('UpdateRdvShipmentDataForAgencyPickup', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultUpdateRdvShipmentDataForAgencyPickup;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named UpdateRdvShipmentData
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \Scraper\ScraperDPD\StructType\UserCredentials
     * - SOAPHeaders: required
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperDPD\StructType\UpdateRdvShipmentDataResponse|bool
     */
    public function UpdateRdvShipmentData(\Scraper\ScraperDPD\StructType\UpdateRdvShipmentData $parameters)
    {
        try {
            $this->setResult($resultUpdateRdvShipmentData = $this->getSoapClient()->__soapCall('UpdateRdvShipmentData', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultUpdateRdvShipmentData;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named UpdateRdvShipmentDataForPredict
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \Scraper\ScraperDPD\StructType\UserCredentials
     * - SOAPHeaders: required
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperDPD\StructType\UpdateRdvShipmentDataForPredictResponse|bool
     */
    public function UpdateRdvShipmentDataForPredict(\Scraper\ScraperDPD\StructType\UpdateRdvShipmentDataForPredict $parameters)
    {
        try {
            $this->setResult($resultUpdateRdvShipmentDataForPredict = $this->getSoapClient()->__soapCall('UpdateRdvShipmentDataForPredict', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultUpdateRdvShipmentDataForPredict;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named UpdateRdvShipmentDataForSafePlace
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: UserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \Scraper\ScraperDPD\StructType\UserCredentials
     * - SOAPHeaders: required
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperDPD\StructType\UpdateRdvShipmentDataForSafePlaceResponse|bool
     */
    public function UpdateRdvShipmentDataForSafePlace(\Scraper\ScraperDPD\StructType\UpdateRdvShipmentDataForSafePlace $parameters)
    {
        try {
            $this->setResult($resultUpdateRdvShipmentDataForSafePlace = $this->getSoapClient()->__soapCall('UpdateRdvShipmentDataForSafePlace', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultUpdateRdvShipmentDataForSafePlace;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result
     *
     * @see AbstractSoapClientBase::getResult()
     *
     * @return \Scraper\ScraperDPD\StructType\UpdateRdvShipmentDataForAgencyPickupResponse|\Scraper\ScraperDPD\StructType\UpdateRdvShipmentDataForPredictResponse|\Scraper\ScraperDPD\StructType\UpdateRdvShipmentDataForSafePlaceResponse|\Scraper\ScraperDPD\StructType\UpdateRdvShipmentDataForShopResponse|\Scraper\ScraperDPD\StructType\UpdateRdvShipmentDataResponse|\Scraper\ScraperDPD\StructType\UpdateServiceNoticeResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
