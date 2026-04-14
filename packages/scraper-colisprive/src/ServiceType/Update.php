<?php declare(strict_types=1);

namespace Scraper\ScraperColisPrive\ServiceType;

use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Update ServiceType
 */
class Update extends AbstractSoapClientBase
{
    /**
     * Sets the AuthenticationHeader SoapHeader param
     *
     * @uses AbstractSoapClientBase::setSoapHeader()
     */
    public function setSoapHeaderAuthenticationHeader(\Scraper\ScraperColisPrive\StructType\AuthenticationHeader $authenticationHeader, string $namespace = 'http://colisprive.com/externe/1.0/', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'AuthenticationHeader', $authenticationHeader, $mustUnderstand, $actor);
    }

    /**
     * Method to call the operation originally named UpdateParcelStatus
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: AuthenticationHeader
     * - SOAPHeaderNamespaces: http://colisprive.com/externe/1.0/
     * - SOAPHeaderTypes: \Scraper\ScraperColisPrive\StructType\AuthenticationHeader
     * - SOAPHeaders: required
     * - documentation: Ce service permet de modifier le statut du colis pour certains clients chargeurs.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperColisPrive\StructType\UpdateParcelStatusResponse|bool
     */
    public function UpdateParcelStatus(\Scraper\ScraperColisPrive\StructType\UpdateParcelStatus $parameters)
    {
        try {
            $this->setResult($resultUpdateParcelStatus = $this->getSoapClient()->__soapCall('UpdateParcelStatus', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultUpdateParcelStatus;
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
     * @return \Scraper\ScraperColisPrive\StructType\UpdateParcelStatusResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
