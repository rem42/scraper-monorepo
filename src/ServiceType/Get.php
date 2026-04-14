<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\ServiceType;

use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 */
class Get extends AbstractSoapClientBase
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
     * Method to call the operation originally named GetServiceNoticeAnswers
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
     * @return \Scraper\ScraperDPD\StructType\GetServiceNoticeAnswersResponse|bool
     */
    public function GetServiceNoticeAnswers(\Scraper\ScraperDPD\StructType\GetServiceNoticeAnswers $parameters)
    {
        try {
            $this->setResult($resultGetServiceNoticeAnswers = $this->getSoapClient()->__soapCall('GetServiceNoticeAnswers', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetServiceNoticeAnswers;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named GetServiceNotices
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
     * @return \Scraper\ScraperDPD\StructType\GetServiceNoticesResponse|bool
     */
    public function GetServiceNotices(\Scraper\ScraperDPD\StructType\GetServiceNotices $parameters)
    {
        try {
            $this->setResult($resultGetServiceNotices = $this->getSoapClient()->__soapCall('GetServiceNotices', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetServiceNotices;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named GetAllServiceNotices
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
     * @return \Scraper\ScraperDPD\StructType\GetAllServiceNoticesResponse|bool
     */
    public function GetAllServiceNotices(\Scraper\ScraperDPD\StructType\GetAllServiceNotices $parameters)
    {
        try {
            $this->setResult($resultGetAllServiceNotices = $this->getSoapClient()->__soapCall('GetAllServiceNotices', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetAllServiceNotices;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named GetBic3
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
     * @return \Scraper\ScraperDPD\StructType\GetBic3Response|bool
     */
    public function GetBic3(\Scraper\ScraperDPD\StructType\GetBic3 $parameters)
    {
        try {
            $this->setResult($resultGetBic3 = $this->getSoapClient()->__soapCall('GetBic3', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetBic3;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named GetBic3Routing
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
     * @return \Scraper\ScraperDPD\StructType\GetBic3RoutingResponse|bool
     */
    public function GetBic3Routing(\Scraper\ScraperDPD\StructType\GetBic3Routing $parameters)
    {
        try {
            $this->setResult($resultGetBic3Routing = $this->getSoapClient()->__soapCall('GetBic3Routing', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetBic3Routing;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named GetGeoRouting
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
     * @return \Scraper\ScraperDPD\StructType\GetGeoRoutingResponse|bool
     */
    public function GetGeoRouting(\Scraper\ScraperDPD\StructType\GetGeoRouting $parameters)
    {
        try {
            $this->setResult($resultGetGeoRouting = $this->getSoapClient()->__soapCall('GetGeoRouting', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetGeoRouting;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named GetGeoRoutingReverse
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
     * @return \Scraper\ScraperDPD\StructType\GetGeoRoutingReverseResponse|bool
     */
    public function GetGeoRoutingReverse(\Scraper\ScraperDPD\StructType\GetGeoRoutingReverse $parameters)
    {
        try {
            $this->setResult($resultGetGeoRoutingReverse = $this->getSoapClient()->__soapCall('GetGeoRoutingReverse', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetGeoRoutingReverse;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named GetRetourShipmentData
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
     * @return \Scraper\ScraperDPD\StructType\GetRetourShipmentDataResponse|bool
     */
    public function GetRetourShipmentData(\Scraper\ScraperDPD\StructType\GetRetourShipmentData $parameters)
    {
        try {
            $this->setResult($resultGetRetourShipmentData = $this->getSoapClient()->__soapCall('GetRetourShipmentData', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetRetourShipmentData;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named GetRetourShipmentDataBc
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
     * @return \Scraper\ScraperDPD\StructType\GetRetourShipmentDataBcResponse|bool
     */
    public function GetRetourShipmentDataBc(\Scraper\ScraperDPD\StructType\GetRetourShipmentDataBc $parameters)
    {
        try {
            $this->setResult($resultGetRetourShipmentDataBc = $this->getSoapClient()->__soapCall('GetRetourShipmentDataBc', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetRetourShipmentDataBc;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named GetLabel
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
     * @return \Scraper\ScraperDPD\StructType\GetLabelResponse|bool
     */
    public function GetLabel(\Scraper\ScraperDPD\StructType\GetLabel $parameters)
    {
        try {
            $this->setResult($resultGetLabel = $this->getSoapClient()->__soapCall('GetLabel', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetLabel;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named GetLabelBc
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
     * @return \Scraper\ScraperDPD\StructType\GetLabelBcResponse|bool
     */
    public function GetLabelBc(\Scraper\ScraperDPD\StructType\GetLabelBc $parameters)
    {
        try {
            $this->setResult($resultGetLabelBc = $this->getSoapClient()->__soapCall('GetLabelBc', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetLabelBc;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named GetLabelData
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
     * @return \Scraper\ScraperDPD\StructType\GetLabelDataResponse|bool
     */
    public function GetLabelData(\Scraper\ScraperDPD\StructType\GetLabelData $parameters)
    {
        try {
            $this->setResult($resultGetLabelData = $this->getSoapClient()->__soapCall('GetLabelData', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetLabelData;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named GetSecureData
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
     * @return \Scraper\ScraperDPD\StructType\GetSecureDataResponse|bool
     */
    public function GetSecureData(\Scraper\ScraperDPD\StructType\GetSecureData $parameters)
    {
        try {
            $this->setResult($resultGetSecureData = $this->getSoapClient()->__soapCall('GetSecureData', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetSecureData;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named GetRetourLabel
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
     * @return \Scraper\ScraperDPD\StructType\GetRetourLabelResponse|bool
     */
    public function GetRetourLabel(\Scraper\ScraperDPD\StructType\GetRetourLabel $parameters)
    {
        try {
            $this->setResult($resultGetRetourLabel = $this->getSoapClient()->__soapCall('GetRetourLabel', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetRetourLabel;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named GetRetourLabelBc
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
     * @return \Scraper\ScraperDPD\StructType\GetRetourLabelBcResponse|bool
     */
    public function GetRetourLabelBc(\Scraper\ScraperDPD\StructType\GetRetourLabelBc $parameters)
    {
        try {
            $this->setResult($resultGetRetourLabelBc = $this->getSoapClient()->__soapCall('GetRetourLabelBc', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetRetourLabelBc;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named GetShipment
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
     * @return \Scraper\ScraperDPD\StructType\GetShipmentResponse|bool
     */
    public function GetShipment(\Scraper\ScraperDPD\StructType\GetShipment $parameters)
    {
        try {
            $this->setResult($resultGetShipment = $this->getSoapClient()->__soapCall('GetShipment', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetShipment;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named GetShipmentBc
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
     * @return \Scraper\ScraperDPD\StructType\GetShipmentBcResponse|bool
     */
    public function GetShipmentBc(\Scraper\ScraperDPD\StructType\GetShipmentBc $parameters)
    {
        try {
            $this->setResult($resultGetShipmentBc = $this->getSoapClient()->__soapCall('GetShipmentBc', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetShipmentBc;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named GetShipmentWcs
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
     * @return \Scraper\ScraperDPD\StructType\GetShipmentWcsResponse|bool
     */
    public function GetShipmentWcs(\Scraper\ScraperDPD\StructType\GetShipmentWcs $parameters)
    {
        try {
            $this->setResult($resultGetShipmentWcs = $this->getSoapClient()->__soapCall('GetShipmentWcs', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetShipmentWcs;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named GetShipmentBcMulti
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
     * @return \Scraper\ScraperDPD\StructType\GetShipmentBcMultiResponse|bool
     */
    public function GetShipmentBcMulti(\Scraper\ScraperDPD\StructType\GetShipmentBcMulti $parameters)
    {
        try {
            $this->setResult($resultGetShipmentBcMulti = $this->getSoapClient()->__soapCall('GetShipmentBcMulti', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetShipmentBcMulti;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named GetReverseOnDemandMode
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
     * @return \Scraper\ScraperDPD\StructType\GetReverseOnDemandModeResponse|bool
     */
    public function GetReverseOnDemandMode(\Scraper\ScraperDPD\StructType\GetReverseOnDemandMode $parameters)
    {
        try {
            $this->setResult($resultGetReverseOnDemandMode = $this->getSoapClient()->__soapCall('GetReverseOnDemandMode', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetReverseOnDemandMode;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named GetLastNumber
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
     * @return \Scraper\ScraperDPD\StructType\GetLastNumberResponse|bool
     */
    public function GetLastNumber(\Scraper\ScraperDPD\StructType\GetLastNumber $parameters)
    {
        try {
            $this->setResult($resultGetLastNumber = $this->getSoapClient()->__soapCall('GetLastNumber', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetLastNumber;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named GetNationalTransitTime
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
     * @return \Scraper\ScraperDPD\StructType\GetNationalTransitTimeResponse|bool
     */
    public function GetNationalTransitTime(\Scraper\ScraperDPD\StructType\GetNationalTransitTime $parameters)
    {
        try {
            $this->setResult($resultGetNationalTransitTime = $this->getSoapClient()->__soapCall('GetNationalTransitTime', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetNationalTransitTime;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named GetRdvShipmentData
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
     * @return \Scraper\ScraperDPD\StructType\GetRdvShipmentDataResponse|bool
     */
    public function GetRdvShipmentData(\Scraper\ScraperDPD\StructType\GetRdvShipmentData $parameters)
    {
        try {
            $this->setResult($resultGetRdvShipmentData = $this->getSoapClient()->__soapCall('GetRdvShipmentData', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetRdvShipmentData;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named GetSafePlaceData
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
     * @return \Scraper\ScraperDPD\StructType\GetSafePlaceDataResponse|bool
     */
    public function GetSafePlaceData(\Scraper\ScraperDPD\StructType\GetSafePlaceData $parameters)
    {
        try {
            $this->setResult($resultGetSafePlaceData = $this->getSoapClient()->__soapCall('GetSafePlaceData', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetSafePlaceData;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named GetCustomerAddress
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
     * @return \Scraper\ScraperDPD\StructType\GetCustomerAddressResponse|bool
     */
    public function GetCustomerAddress(\Scraper\ScraperDPD\StructType\GetCustomerAddress $parameters)
    {
        try {
            $this->setResult($resultGetCustomerAddress = $this->getSoapClient()->__soapCall('GetCustomerAddress', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetCustomerAddress;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named GetNumberRange
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
     * @return \Scraper\ScraperDPD\StructType\GetNumberRangeResponse|bool
     */
    public function GetNumberRange(\Scraper\ScraperDPD\StructType\GetNumberRange $parameters)
    {
        try {
            $this->setResult($resultGetNumberRange = $this->getSoapClient()->__soapCall('GetNumberRange', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetNumberRange;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named GetNumberRangeBc
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
     * @return \Scraper\ScraperDPD\StructType\GetNumberRangeBcResponse|bool
     */
    public function GetNumberRangeBc(\Scraper\ScraperDPD\StructType\GetNumberRangeBc $parameters)
    {
        try {
            $this->setResult($resultGetNumberRangeBc = $this->getSoapClient()->__soapCall('GetNumberRangeBc', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetNumberRangeBc;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named GetCustomerProfile
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
     * @return \Scraper\ScraperDPD\StructType\GetCustomerProfileResponse|bool
     */
    public function GetCustomerProfile(\Scraper\ScraperDPD\StructType\GetCustomerProfile $parameters)
    {
        try {
            $this->setResult($resultGetCustomerProfile = $this->getSoapClient()->__soapCall('GetCustomerProfile', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetCustomerProfile;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named GetProperties
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
     * @return \Scraper\ScraperDPD\StructType\GetPropertiesResponse|bool
     */
    public function GetProperties(\Scraper\ScraperDPD\StructType\GetProperties $parameters)
    {
        try {
            $this->setResult($resultGetProperties = $this->getSoapClient()->__soapCall('GetProperties', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetProperties;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named GetOptionValue
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
     * @return \Scraper\ScraperDPD\StructType\GetOptionValueResponse|bool
     */
    public function GetOptionValue(\Scraper\ScraperDPD\StructType\GetOptionValue $parameters)
    {
        try {
            $this->setResult($resultGetOptionValue = $this->getSoapClient()->__soapCall('GetOptionValue', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetOptionValue;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named GetOptionValues
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
     * @return \Scraper\ScraperDPD\StructType\GetOptionValuesResponse|bool
     */
    public function GetOptionValues(\Scraper\ScraperDPD\StructType\GetOptionValues $parameters)
    {
        try {
            $this->setResult($resultGetOptionValues = $this->getSoapClient()->__soapCall('GetOptionValues', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetOptionValues;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named GetShipping
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
     * @return \Scraper\ScraperDPD\StructType\GetShippingResponse|bool
     */
    public function GetShipping(\Scraper\ScraperDPD\StructType\GetShipping $parameters)
    {
        try {
            $this->setResult($resultGetShipping = $this->getSoapClient()->__soapCall('GetShipping', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetShipping;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named getInfo
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
     * @return \Scraper\ScraperDPD\StructType\GetInfoResponse|bool
     */
    public function getInfo(\Scraper\ScraperDPD\StructType\GetInfo $parameters)
    {
        try {
            $this->setResult($resultGetInfo = $this->getSoapClient()->__soapCall('getInfo', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetInfo;
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
     * @return \Scraper\ScraperDPD\StructType\GetAllServiceNoticesResponse|\Scraper\ScraperDPD\StructType\GetBic3Response|\Scraper\ScraperDPD\StructType\GetBic3RoutingResponse|\Scraper\ScraperDPD\StructType\GetCustomerAddressResponse|\Scraper\ScraperDPD\StructType\GetCustomerProfileResponse|\Scraper\ScraperDPD\StructType\GetGeoRoutingResponse|\Scraper\ScraperDPD\StructType\GetGeoRoutingReverseResponse|\Scraper\ScraperDPD\StructType\GetInfoResponse|\Scraper\ScraperDPD\StructType\GetLabelBcResponse|\Scraper\ScraperDPD\StructType\GetLabelDataResponse|\Scraper\ScraperDPD\StructType\GetLabelResponse|\Scraper\ScraperDPD\StructType\GetLastNumberResponse|\Scraper\ScraperDPD\StructType\GetNationalTransitTimeResponse|\Scraper\ScraperDPD\StructType\GetNumberRangeBcResponse|\Scraper\ScraperDPD\StructType\GetNumberRangeResponse|\Scraper\ScraperDPD\StructType\GetOptionValueResponse|\Scraper\ScraperDPD\StructType\GetOptionValuesResponse|\Scraper\ScraperDPD\StructType\GetPropertiesResponse|\Scraper\ScraperDPD\StructType\GetRdvShipmentDataResponse|\Scraper\ScraperDPD\StructType\GetRetourLabelBcResponse|\Scraper\ScraperDPD\StructType\GetRetourLabelResponse|\Scraper\ScraperDPD\StructType\GetRetourShipmentDataBcResponse|\Scraper\ScraperDPD\StructType\GetRetourShipmentDataResponse|\Scraper\ScraperDPD\StructType\GetReverseOnDemandModeResponse|\Scraper\ScraperDPD\StructType\GetSafePlaceDataResponse|\Scraper\ScraperDPD\StructType\GetSecureDataResponse|\Scraper\ScraperDPD\StructType\GetServiceNoticeAnswersResponse|\Scraper\ScraperDPD\StructType\GetServiceNoticesResponse|\Scraper\ScraperDPD\StructType\GetShipmentBcMultiResponse|\Scraper\ScraperDPD\StructType\GetShipmentBcResponse|\Scraper\ScraperDPD\StructType\GetShipmentResponse|\Scraper\ScraperDPD\StructType\GetShipmentWcsResponse|\Scraper\ScraperDPD\StructType\GetShippingResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
