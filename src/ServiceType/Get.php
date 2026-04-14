<?php declare(strict_types=1);

namespace Scraper\ScraperColisPrive\ServiceType;

use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 */
class Get extends AbstractSoapClientBase
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
     * Method to call the operation originally named GetParcel
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: AuthenticationHeader
     * - SOAPHeaderNamespaces: http://colisprive.com/externe/1.0/
     * - SOAPHeaderTypes: \Scraper\ScraperColisPrive\StructType\AuthenticationHeader
     * - SOAPHeaders: required
     * - documentation: Permet de récupérer toutes les informations relatives à un colis déjà annoncé chez Colis Privé.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperColisPrive\StructType\GetParcelResponse|bool
     */
    public function GetParcel(\Scraper\ScraperColisPrive\StructType\GetParcel $parameters)
    {
        try {
            $this->setResult($resultGetParcel = $this->getSoapClient()->__soapCall('GetParcel', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetParcel;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named GetDeliveryCalendar
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: AuthenticationHeader
     * - SOAPHeaderNamespaces: http://colisprive.com/externe/1.0/
     * - SOAPHeaderTypes: \Scraper\ScraperColisPrive\StructType\AuthenticationHeader
     * - SOAPHeaders: required
     * - documentation: Fournit la liste des dates possibles pour la planification d'une livraison à domicile ou à un tiers pour un code postal donné.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperColisPrive\StructType\GetDeliveryCalendarResponse|bool
     */
    public function GetDeliveryCalendar(\Scraper\ScraperColisPrive\StructType\GetDeliveryCalendar $parameters)
    {
        try {
            $this->setResult($resultGetDeliveryCalendar = $this->getSoapClient()->__soapCall('GetDeliveryCalendar', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetDeliveryCalendar;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named GetPickupPoint
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: AuthenticationHeader
     * - SOAPHeaderNamespaces: http://colisprive.com/externe/1.0/
     * - SOAPHeaderTypes: \Scraper\ScraperColisPrive\StructType\AuthenticationHeader
     * - SOAPHeaders: required
     * - documentation: Retourne la fiche complète d'un relais dont le code est passé en paramètre.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperColisPrive\StructType\GetPickupPointResponse|bool
     */
    public function GetPickupPoint(\Scraper\ScraperColisPrive\StructType\GetPickupPoint $parameters)
    {
        try {
            $this->setResult($resultGetPickupPoint = $this->getSoapClient()->__soapCall('GetPickupPoint', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetPickupPoint;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named GetPickupPointsList
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: AuthenticationHeader
     * - SOAPHeaderNamespaces: http://colisprive.com/externe/1.0/
     * - SOAPHeaderTypes: \Scraper\ScraperColisPrive\StructType\AuthenticationHeader
     * - SOAPHeaders: required
     * - documentation: Retourne les fiches détaillées des relais pouvant être sélectionnés pour la planification d'une distribution en relais d'un colis passé en paramètre.Pour chaque relais, une date prévisionnelle de livraison dans le point
     * relais est indiquée.La date prévisionnelle est calculée à partir de la date et heure de l'appel au WS GetPickupPointsList.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperColisPrive\StructType\GetPickupPointsListResponse|bool
     */
    public function GetPickupPointsList(\Scraper\ScraperColisPrive\StructType\GetPickupPointsList $parameters)
    {
        try {
            $this->setResult($resultGetPickupPointsList = $this->getSoapClient()->__soapCall('GetPickupPointsList', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetPickupPointsList;
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
     * @return \Scraper\ScraperColisPrive\StructType\GetDeliveryCalendarResponse|\Scraper\ScraperColisPrive\StructType\GetParcelResponse|\Scraper\ScraperColisPrive\StructType\GetPickupPointResponse|\Scraper\ScraperColisPrive\StructType\GetPickupPointsListResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
