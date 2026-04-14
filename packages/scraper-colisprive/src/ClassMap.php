<?php declare(strict_types=1);

namespace Scraper\ScraperColisPrive;

/**
 * Class which returns the class map definition
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     *
     * @return array<string>
     */
    final public static function get(): array
    {
        return [
            'TestService' => '\\Scraper\\ScraperColisPrive\\StructType\\TestService',
            'IdentificationObject' => '\\Scraper\\ScraperColisPrive\\StructType\\IdentificationObject',
            'TestServiceResponse' => '\\Scraper\\ScraperColisPrive\\StructType\\TestServiceResponse',
            'ResponseObject' => '\\Scraper\\ScraperColisPrive\\StructType\\ResponseObject',
            'AuthenticationHeader' => '\\Scraper\\ScraperColisPrive\\StructType\\AuthenticationHeader',
            'SetParcel' => '\\Scraper\\ScraperColisPrive\\StructType\\SetParcel',
            'SetParcelRequest' => '\\Scraper\\ScraperColisPrive\\StructType\\SetParcelRequest',
            'DeliveryAddressObject' => '\\Scraper\\ScraperColisPrive\\StructType\\DeliveryAddressObject',
            'AddressObject' => '\\Scraper\\ScraperColisPrive\\StructType\\AddressObject',
            'LocalizationObject' => '\\Scraper\\ScraperColisPrive\\StructType\\LocalizationObject',
            'TimeInfosObject' => '\\Scraper\\ScraperColisPrive\\StructType\\TimeInfosObject',
            'SetParcelResponse' => '\\Scraper\\ScraperColisPrive\\StructType\\SetParcelResponse',
            'SetParcelReturn' => '\\Scraper\\ScraperColisPrive\\StructType\\SetParcelReturn',
            'SetContainer' => '\\Scraper\\ScraperColisPrive\\StructType\\SetContainer',
            'SetContainerRequest' => '\\Scraper\\ScraperColisPrive\\StructType\\SetContainerRequest',
            'SetContainerResponse' => '\\Scraper\\ScraperColisPrive\\StructType\\SetContainerResponse',
            'SetContainerReturn' => '\\Scraper\\ScraperColisPrive\\StructType\\SetContainerReturn',
            'SetShipment' => '\\Scraper\\ScraperColisPrive\\StructType\\SetShipment',
            'SetShipmentRequest' => '\\Scraper\\ScraperColisPrive\\StructType\\SetShipmentRequest',
            'SetShipmentResponse' => '\\Scraper\\ScraperColisPrive\\StructType\\SetShipmentResponse',
            'SetShipmentReturn' => '\\Scraper\\ScraperColisPrive\\StructType\\SetShipmentReturn',
            'LightParcelObject' => '\\Scraper\\ScraperColisPrive\\StructType\\LightParcelObject',
            'CancelParcel' => '\\Scraper\\ScraperColisPrive\\StructType\\CancelParcel',
            'CancelParcelRequest' => '\\Scraper\\ScraperColisPrive\\StructType\\CancelParcelRequest',
            'CancelParcelResponse' => '\\Scraper\\ScraperColisPrive\\StructType\\CancelParcelResponse',
            'CancelParcelReturn' => '\\Scraper\\ScraperColisPrive\\StructType\\CancelParcelReturn',
            'GetParcel' => '\\Scraper\\ScraperColisPrive\\StructType\\GetParcel',
            'GetParcelRequest' => '\\Scraper\\ScraperColisPrive\\StructType\\GetParcelRequest',
            'GetParcelResponse' => '\\Scraper\\ScraperColisPrive\\StructType\\GetParcelResponse',
            'GetParcelReturn' => '\\Scraper\\ScraperColisPrive\\StructType\\GetParcelReturn',
            'PickupPointObject' => '\\Scraper\\ScraperColisPrive\\StructType\\PickupPointObject',
            'StatusObject' => '\\Scraper\\ScraperColisPrive\\StructType\\StatusObject',
            'CityObject' => '\\Scraper\\ScraperColisPrive\\StructType\\CityObject',
            'GetDeliveryCalendar' => '\\Scraper\\ScraperColisPrive\\StructType\\GetDeliveryCalendar',
            'GetDeliveryCalendarRequest' => '\\Scraper\\ScraperColisPrive\\StructType\\GetDeliveryCalendarRequest',
            'GetDeliveryCalendarResponse' => '\\Scraper\\ScraperColisPrive\\StructType\\GetDeliveryCalendarResponse',
            'GetDeliveryCalendarReturn' => '\\Scraper\\ScraperColisPrive\\StructType\\GetDeliveryCalendarReturn',
            'DeliveryDateObject' => '\\Scraper\\ScraperColisPrive\\StructType\\DeliveryDateObject',
            'Set2ndDelivery' => '\\Scraper\\ScraperColisPrive\\StructType\\Set2ndDelivery',
            'Set2ndDeliveryRequest' => '\\Scraper\\ScraperColisPrive\\StructType\\Set2ndDeliveryRequest',
            'Set2ndDeliveryResponse' => '\\Scraper\\ScraperColisPrive\\StructType\\Set2ndDeliveryResponse',
            'Set2ndDeliveryReturn' => '\\Scraper\\ScraperColisPrive\\StructType\\Set2ndDeliveryReturn',
            'SetPickupPointDelivery' => '\\Scraper\\ScraperColisPrive\\StructType\\SetPickupPointDelivery',
            'SetPickupPointDeliveryRequest' => '\\Scraper\\ScraperColisPrive\\StructType\\SetPickupPointDeliveryRequest',
            'SetPickupPointDeliveryResponse' => '\\Scraper\\ScraperColisPrive\\StructType\\SetPickupPointDeliveryResponse',
            'SetPickupPointDeliveryReturn' => '\\Scraper\\ScraperColisPrive\\StructType\\SetPickupPointDeliveryReturn',
            'GetPickupPoint' => '\\Scraper\\ScraperColisPrive\\StructType\\GetPickupPoint',
            'GetPickupPointRequest' => '\\Scraper\\ScraperColisPrive\\StructType\\GetPickupPointRequest',
            'GetPickupPointResponse' => '\\Scraper\\ScraperColisPrive\\StructType\\GetPickupPointResponse',
            'GetPickupPointReturn' => '\\Scraper\\ScraperColisPrive\\StructType\\GetPickupPointReturn',
            'GetPickupPointsList' => '\\Scraper\\ScraperColisPrive\\StructType\\GetPickupPointsList',
            'GetPickupPointsListRequest' => '\\Scraper\\ScraperColisPrive\\StructType\\GetPickupPointsListRequest',
            'GetPickupPointsListResponse' => '\\Scraper\\ScraperColisPrive\\StructType\\GetPickupPointsListResponse',
            'GetPickupPointsListReturn' => '\\Scraper\\ScraperColisPrive\\StructType\\GetPickupPointsListReturn',
            'PickupPointDeliveryObject' => '\\Scraper\\ScraperColisPrive\\StructType\\PickupPointDeliveryObject',
            'UpdateParcelStatus' => '\\Scraper\\ScraperColisPrive\\StructType\\UpdateParcelStatus',
            'UpdateParcelStatusRequest' => '\\Scraper\\ScraperColisPrive\\StructType\\UpdateParcelStatusRequest',
            'UpdateParcelStatusResponse' => '\\Scraper\\ScraperColisPrive\\StructType\\UpdateParcelStatusResponse',
            'UpdateParcelStatusReturn' => '\\Scraper\\ScraperColisPrive\\StructType\\UpdateParcelStatusReturn',
        ];
    }
}
