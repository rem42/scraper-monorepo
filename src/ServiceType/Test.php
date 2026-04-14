<?php declare(strict_types=1);

namespace Scraper\ScraperColisPrive\ServiceType;

use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Test ServiceType
 *
 * @internal
 */
class Test extends AbstractSoapClientBase
{
    /**
     * Sets the AuthenticationHeader SoapHeader param
     *
     * @uses \AbstractSoapClientBase::setSoapHeader()
     */
    public function setSoapHeaderAuthenticationHeader(\Scraper\ScraperColisPrive\StructType\AuthenticationHeader $authenticationHeader, string $namespace = 'http://colisprive.com/externe/1.0/', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'AuthenticationHeader', $authenticationHeader, $mustUnderstand, $actor);
    }

    /**
     * Method to call the operation originally named TestService
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: AuthenticationHeader
     * - SOAPHeaderNamespaces: http://colisprive.com/externe/1.0/
     * - SOAPHeaderTypes: \Scraper\ScraperColisPrive\StructType\AuthenticationHeader
     * - SOAPHeaders: required
     * - documentation: Ce service permet de faire un premier test de connexion.
     *
     * @uses \AbstractSoapClientBase::getSoapClient()
     * @uses \AbstractSoapClientBase::setResult()
     * @uses \AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperColisPrive\StructType\TestServiceResponse|bool
     */
    public function TestService(\Scraper\ScraperColisPrive\StructType\TestService $parameters)
    {
        try {
            $this->setResult($resultTestService = $this->getSoapClient()->__soapCall('TestService', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultTestService;
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
     * @return \Scraper\ScraperColisPrive\StructType\TestServiceResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
