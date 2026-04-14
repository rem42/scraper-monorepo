<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\ServiceType;

use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Verify ServiceType
 */
class Verify extends AbstractSoapClientBase
{
    /**
     * Sets the VerifyUserCredentials SoapHeader param
     *
     * @uses AbstractSoapClientBase::setSoapHeader()
     */
    public function setSoapHeaderVerifyUserCredentials(\Scraper\ScraperDPD\StructType\VerifyUserCredentials $verifyUserCredentials, string $namespace = 'http://www.cargonet.software', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'VerifyUserCredentials', $verifyUserCredentials, $mustUnderstand, $actor);
    }

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
     * Method to call the operation originally named VerifyConfiguration
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: VerifyUserCredentials
     * - SOAPHeaderNamespaces: http://www.cargonet.software
     * - SOAPHeaderTypes: \Scraper\ScraperDPD\StructType\VerifyUserCredentials
     * - SOAPHeaders: required
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperDPD\StructType\VerifyConfigurationResponse|bool
     */
    public function VerifyConfiguration(\Scraper\ScraperDPD\StructType\VerifyConfiguration $parameters)
    {
        try {
            $this->setResult($resultVerifyConfiguration = $this->getSoapClient()->__soapCall('VerifyConfiguration', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultVerifyConfiguration;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named VerifyClient
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
     * @return \Scraper\ScraperDPD\StructType\VerifyClientResponse|bool
     */
    public function VerifyClient(\Scraper\ScraperDPD\StructType\VerifyClient $parameters)
    {
        try {
            $this->setResult($resultVerifyClient = $this->getSoapClient()->__soapCall('VerifyClient', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultVerifyClient;
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
     * @return \Scraper\ScraperDPD\StructType\VerifyClientResponse|\Scraper\ScraperDPD\StructType\VerifyConfigurationResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
