<?php declare(strict_types=1);

namespace Scraper\ScraperColisPrive\ServiceType;

use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Set ServiceType
 */
class Set extends AbstractSoapClientBase
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
     * Method to call the operation originally named SetParcel
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: AuthenticationHeader
     * - SOAPHeaderNamespaces: http://colisprive.com/externe/1.0/
     * - SOAPHeaderTypes: \Scraper\ScraperColisPrive\StructType\AuthenticationHeader
     * - SOAPHeaders: required
     * - documentation: Permet d'annoncer un nouveau colis à Colis Privé.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperColisPrive\StructType\SetParcelResponse|bool
     */
    public function SetParcel(\Scraper\ScraperColisPrive\StructType\SetParcel $parameters)
    {
        try {
            $this->setResult($resultSetParcel = $this->getSoapClient()->__soapCall('SetParcel', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultSetParcel;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named SetContainer
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: AuthenticationHeader
     * - SOAPHeaderNamespaces: http://colisprive.com/externe/1.0/
     * - SOAPHeaderTypes: \Scraper\ScraperColisPrive\StructType\AuthenticationHeader
     * - SOAPHeaders: required
     * - documentation: Permet d'annoncer un nouveau conteneur de colis à Colis Privé.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperColisPrive\StructType\SetContainerResponse|bool
     */
    public function SetContainer(\Scraper\ScraperColisPrive\StructType\SetContainer $parameters)
    {
        try {
            $this->setResult($resultSetContainer = $this->getSoapClient()->__soapCall('SetContainer', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultSetContainer;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named SetShipment
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: AuthenticationHeader
     * - SOAPHeaderNamespaces: http://colisprive.com/externe/1.0/
     * - SOAPHeaderTypes: \Scraper\ScraperColisPrive\StructType\AuthenticationHeader
     * - SOAPHeaders: required
     * - documentation: Ce service permet de valider la soumission de tous les colis créés par le WS SetParcel en attente dans le SAS.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperColisPrive\StructType\SetShipmentResponse|bool
     */
    public function SetShipment(\Scraper\ScraperColisPrive\StructType\SetShipment $parameters)
    {
        try {
            $this->setResult($resultSetShipment = $this->getSoapClient()->__soapCall('SetShipment', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultSetShipment;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named SetPickupPointDelivery
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: AuthenticationHeader
     * - SOAPHeaderNamespaces: http://colisprive.com/externe/1.0/
     * - SOAPHeaderTypes: \Scraper\ScraperColisPrive\StructType\AuthenticationHeader
     * - SOAPHeaders: required
     * - documentation: Permet de fournir toutes les informations relatives à la replanification de la livraison d'un colis dans un point relais.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperColisPrive\StructType\SetPickupPointDeliveryResponse|bool
     */
    public function SetPickupPointDelivery(\Scraper\ScraperColisPrive\StructType\SetPickupPointDelivery $parameters)
    {
        try {
            $this->setResult($resultSetPickupPointDelivery = $this->getSoapClient()->__soapCall('SetPickupPointDelivery', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultSetPickupPointDelivery;
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
     * @return \Scraper\ScraperColisPrive\StructType\SetContainerResponse|\Scraper\ScraperColisPrive\StructType\SetParcelResponse|\Scraper\ScraperColisPrive\StructType\SetPickupPointDeliveryResponse|\Scraper\ScraperColisPrive\StructType\SetShipmentResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
