<?php declare(strict_types=1);

namespace Scraper\ScraperColisPrive\ServiceType;

use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Setnd ServiceType
 */
class Setnd extends AbstractSoapClientBase
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
     * Method to call the operation originally named Set2ndDelivery
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: AuthenticationHeader
     * - SOAPHeaderNamespaces: http://colisprive.com/externe/1.0/
     * - SOAPHeaderTypes: \Scraper\ScraperColisPrive\StructType\AuthenticationHeader
     * - SOAPHeaders: required
     * - documentation: Permet de fournir toutes les informations relatives à la replanification de la livraison d'un colis.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperColisPrive\StructType\Set2ndDeliveryResponse|bool
     */
    public function Set2ndDelivery(\Scraper\ScraperColisPrive\StructType\Set2ndDelivery $parameters)
    {
        try {
            $this->setResult($resultSet2ndDelivery = $this->getSoapClient()->__soapCall('Set2ndDelivery', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultSet2ndDelivery;
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
     * @return \Scraper\ScraperColisPrive\StructType\Set2ndDeliveryResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
