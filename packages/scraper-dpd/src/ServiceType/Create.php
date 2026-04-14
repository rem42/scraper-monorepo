<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\ServiceType;

use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Create ServiceType
 */
class Create extends AbstractSoapClientBase
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
     * Method to call the operation originally named CreateShipment
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
     * @return \Scraper\ScraperDPD\StructType\CreateShipmentResponse|bool
     */
    public function CreateShipment(\Scraper\ScraperDPD\StructType\CreateShipment $parameters)
    {
        try {
            $this->setResult($resultCreateShipment = $this->getSoapClient()->__soapCall('CreateShipment', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultCreateShipment;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named CreateShipmentBc
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
     * @return \Scraper\ScraperDPD\StructType\CreateShipmentBcResponse|bool
     */
    public function CreateShipmentBc(\Scraper\ScraperDPD\StructType\CreateShipmentBc $parameters)
    {
        try {
            $this->setResult($resultCreateShipmentBc = $this->getSoapClient()->__soapCall('CreateShipmentBc', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultCreateShipmentBc;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named CreateShipmentWithLabels
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
     * @return \Scraper\ScraperDPD\StructType\CreateShipmentWithLabelsResponse|bool
     */
    public function CreateShipmentWithLabels(\Scraper\ScraperDPD\StructType\CreateShipmentWithLabels $parameters)
    {
        try {
            $this->setResult($resultCreateShipmentWithLabels = $this->getSoapClient()->__soapCall('CreateShipmentWithLabels', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultCreateShipmentWithLabels;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named CreateShipmentWithLabelsBc
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
     * @return \Scraper\ScraperDPD\StructType\CreateShipmentWithLabelsBcResponse|bool
     */
    public function CreateShipmentWithLabelsBc(\Scraper\ScraperDPD\StructType\CreateShipmentWithLabelsBc $parameters)
    {
        try {
            $this->setResult($resultCreateShipmentWithLabelsBc = $this->getSoapClient()->__soapCall('CreateShipmentWithLabelsBc', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultCreateShipmentWithLabelsBc;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named CreateMultiShipment
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
     * @return \Scraper\ScraperDPD\StructType\CreateMultiShipmentResponse|bool
     */
    public function CreateMultiShipment(\Scraper\ScraperDPD\StructType\CreateMultiShipment $parameters)
    {
        try {
            $this->setResult($resultCreateMultiShipment = $this->getSoapClient()->__soapCall('CreateMultiShipment', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultCreateMultiShipment;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named CreateMultiShipmentBc
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
     * @return \Scraper\ScraperDPD\StructType\CreateMultiShipmentBcResponse|bool
     */
    public function CreateMultiShipmentBc(\Scraper\ScraperDPD\StructType\CreateMultiShipmentBc $parameters)
    {
        try {
            $this->setResult($resultCreateMultiShipmentBc = $this->getSoapClient()->__soapCall('CreateMultiShipmentBc', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultCreateMultiShipmentBc;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named CreateReverseInverseShipment
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
     * @return \Scraper\ScraperDPD\StructType\CreateReverseInverseShipmentResponse|bool
     */
    public function CreateReverseInverseShipment(\Scraper\ScraperDPD\StructType\CreateReverseInverseShipment $parameters)
    {
        try {
            $this->setResult($resultCreateReverseInverseShipment = $this->getSoapClient()->__soapCall('CreateReverseInverseShipment', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultCreateReverseInverseShipment;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named CreateReverseInverseShipmentBc
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
     * @return \Scraper\ScraperDPD\StructType\CreateReverseInverseShipmentBcResponse|bool
     */
    public function CreateReverseInverseShipmentBc(\Scraper\ScraperDPD\StructType\CreateReverseInverseShipmentBc $parameters)
    {
        try {
            $this->setResult($resultCreateReverseInverseShipmentBc = $this->getSoapClient()->__soapCall('CreateReverseInverseShipmentBc', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultCreateReverseInverseShipmentBc;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named
     * CreateReverseInverseShipmentWithLabels
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
     * @return \Scraper\ScraperDPD\StructType\CreateReverseInverseShipmentWithLabelsResponse|bool
     */
    public function CreateReverseInverseShipmentWithLabels(\Scraper\ScraperDPD\StructType\CreateReverseInverseShipmentWithLabels $parameters)
    {
        try {
            $this->setResult($resultCreateReverseInverseShipmentWithLabels = $this->getSoapClient()->__soapCall('CreateReverseInverseShipmentWithLabels', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultCreateReverseInverseShipmentWithLabels;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named
     * CreateReverseInverseShipmentWithLabelsBc
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
     * @return \Scraper\ScraperDPD\StructType\CreateReverseInverseShipmentWithLabelsBcResponse|bool
     */
    public function CreateReverseInverseShipmentWithLabelsBc(\Scraper\ScraperDPD\StructType\CreateReverseInverseShipmentWithLabelsBc $parameters)
    {
        try {
            $this->setResult($resultCreateReverseInverseShipmentWithLabelsBc = $this->getSoapClient()->__soapCall('CreateReverseInverseShipmentWithLabelsBc', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultCreateReverseInverseShipmentWithLabelsBc;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named CreateCollectionRequest
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
     * @return \Scraper\ScraperDPD\StructType\CreateCollectionRequestResponse|bool
     */
    public function CreateCollectionRequest(\Scraper\ScraperDPD\StructType\CreateCollectionRequest $parameters)
    {
        try {
            $this->setResult($resultCreateCollectionRequest = $this->getSoapClient()->__soapCall('CreateCollectionRequest', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultCreateCollectionRequest;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named CreateCollectionRequestBc
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
     * @return \Scraper\ScraperDPD\StructType\CreateCollectionRequestBcResponse|bool
     */
    public function CreateCollectionRequestBc(\Scraper\ScraperDPD\StructType\CreateCollectionRequestBc $parameters)
    {
        try {
            $this->setResult($resultCreateCollectionRequestBc = $this->getSoapClient()->__soapCall('CreateCollectionRequestBc', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultCreateCollectionRequestBc;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named CreatePickupAtCustomer
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
     * @return \Scraper\ScraperDPD\StructType\CreatePickupAtCustomerResponse|bool
     */
    public function CreatePickupAtCustomer(\Scraper\ScraperDPD\StructType\CreatePickupAtCustomer $parameters)
    {
        try {
            $this->setResult($resultCreatePickupAtCustomer = $this->getSoapClient()->__soapCall('CreatePickupAtCustomer', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultCreatePickupAtCustomer;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named CreatePickupAtCustomerBc
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
     * @return \Scraper\ScraperDPD\StructType\CreatePickupAtCustomerBcResponse|bool
     */
    public function CreatePickupAtCustomerBc(\Scraper\ScraperDPD\StructType\CreatePickupAtCustomerBc $parameters)
    {
        try {
            $this->setResult($resultCreatePickupAtCustomerBc = $this->getSoapClient()->__soapCall('CreatePickupAtCustomerBc', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultCreatePickupAtCustomerBc;
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
     * @return \Scraper\ScraperDPD\StructType\CreateCollectionRequestBcResponse|\Scraper\ScraperDPD\StructType\CreateCollectionRequestResponse|\Scraper\ScraperDPD\StructType\CreateMultiShipmentBcResponse|\Scraper\ScraperDPD\StructType\CreateMultiShipmentResponse|\Scraper\ScraperDPD\StructType\CreatePickupAtCustomerBcResponse|\Scraper\ScraperDPD\StructType\CreatePickupAtCustomerResponse|\Scraper\ScraperDPD\StructType\CreateReverseInverseShipmentBcResponse|\Scraper\ScraperDPD\StructType\CreateReverseInverseShipmentResponse|\Scraper\ScraperDPD\StructType\CreateReverseInverseShipmentWithLabelsBcResponse|\Scraper\ScraperDPD\StructType\CreateReverseInverseShipmentWithLabelsResponse|\Scraper\ScraperDPD\StructType\CreateShipmentBcResponse|\Scraper\ScraperDPD\StructType\CreateShipmentResponse|\Scraper\ScraperDPD\StructType\CreateShipmentWithLabelsBcResponse|\Scraper\ScraperDPD\StructType\CreateShipmentWithLabelsResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
