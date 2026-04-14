<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\ServiceType;

use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Is ServiceType
 */
class Is extends AbstractSoapClientBase
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
     * Method to call the operation originally named isAlive
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperDPD\StructType\IsAliveResponse|bool
     */
    public function isAlive(\Scraper\ScraperDPD\StructType\IsAlive $parameters)
    {
        try {
            $this->setResult($resultIsAlive = $this->getSoapClient()->__soapCall('isAlive', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultIsAlive;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named IsPickableOnDate
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
     * @return \Scraper\ScraperDPD\StructType\IsPickableOnDateResponse|bool
     */
    public function IsPickableOnDate(\Scraper\ScraperDPD\StructType\IsPickableOnDate $parameters)
    {
        try {
            $this->setResult($resultIsPickableOnDate = $this->getSoapClient()->__soapCall('IsPickableOnDate', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultIsPickableOnDate;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named IsDeliverableOnDate
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
     * @return \Scraper\ScraperDPD\StructType\IsDeliverableOnDateResponse|bool
     */
    public function IsDeliverableOnDate(\Scraper\ScraperDPD\StructType\IsDeliverableOnDate $parameters)
    {
        try {
            $this->setResult($resultIsDeliverableOnDate = $this->getSoapClient()->__soapCall('IsDeliverableOnDate', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultIsDeliverableOnDate;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named IsCustomerBlocked
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
     * @return \Scraper\ScraperDPD\StructType\IsCustomerBlockedResponse|bool
     */
    public function IsCustomerBlocked(\Scraper\ScraperDPD\StructType\IsCustomerBlocked $parameters)
    {
        try {
            $this->setResult($resultIsCustomerBlocked = $this->getSoapClient()->__soapCall('IsCustomerBlocked', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultIsCustomerBlocked;
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
     * @return \Scraper\ScraperDPD\StructType\IsAliveResponse|\Scraper\ScraperDPD\StructType\IsCustomerBlockedResponse|\Scraper\ScraperDPD\StructType\IsDeliverableOnDateResponse|\Scraper\ScraperDPD\StructType\IsPickableOnDateResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
