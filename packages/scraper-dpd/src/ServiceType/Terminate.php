<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\ServiceType;

use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Terminate ServiceType
 */
class Terminate extends AbstractSoapClientBase
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
     * Method to call the operation originally named TerminateCollectionRequest
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
     * @return \Scraper\ScraperDPD\StructType\TerminateCollectionRequestResponse|bool
     */
    public function TerminateCollectionRequest(\Scraper\ScraperDPD\StructType\TerminateCollectionRequest $parameters)
    {
        try {
            $this->setResult($resultTerminateCollectionRequest = $this->getSoapClient()->__soapCall('TerminateCollectionRequest', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultTerminateCollectionRequest;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named TerminateCollectionRequestBc
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
     * @return \Scraper\ScraperDPD\StructType\TerminateCollectionRequestBcResponse|bool
     */
    public function TerminateCollectionRequestBc(\Scraper\ScraperDPD\StructType\TerminateCollectionRequestBc $parameters)
    {
        try {
            $this->setResult($resultTerminateCollectionRequestBc = $this->getSoapClient()->__soapCall('TerminateCollectionRequestBc', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultTerminateCollectionRequestBc;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named TerminateNumberRange
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
     * @return \Scraper\ScraperDPD\StructType\TerminateNumberRangeResponse|bool
     */
    public function TerminateNumberRange(\Scraper\ScraperDPD\StructType\TerminateNumberRange $parameters)
    {
        try {
            $this->setResult($resultTerminateNumberRange = $this->getSoapClient()->__soapCall('TerminateNumberRange', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultTerminateNumberRange;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named TerminateNumberRangeBc
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
     * @return \Scraper\ScraperDPD\StructType\TerminateNumberRangeBcResponse|bool
     */
    public function TerminateNumberRangeBc(\Scraper\ScraperDPD\StructType\TerminateNumberRangeBc $parameters)
    {
        try {
            $this->setResult($resultTerminateNumberRangeBc = $this->getSoapClient()->__soapCall('TerminateNumberRangeBc', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultTerminateNumberRangeBc;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named TerminateShipment
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
     * @return \Scraper\ScraperDPD\StructType\TerminateShipmentResponse|bool
     */
    public function TerminateShipment(\Scraper\ScraperDPD\StructType\TerminateShipment $parameters)
    {
        try {
            $this->setResult($resultTerminateShipment = $this->getSoapClient()->__soapCall('TerminateShipment', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultTerminateShipment;
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
     * @return \Scraper\ScraperDPD\StructType\TerminateCollectionRequestBcResponse|\Scraper\ScraperDPD\StructType\TerminateCollectionRequestResponse|\Scraper\ScraperDPD\StructType\TerminateNumberRangeBcResponse|\Scraper\ScraperDPD\StructType\TerminateNumberRangeResponse|\Scraper\ScraperDPD\StructType\TerminateShipmentResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
