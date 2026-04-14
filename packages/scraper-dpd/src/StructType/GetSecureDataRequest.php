<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSecureDataRequest StructType
 */
#[\AllowDynamicProperties]
class GetSecureDataRequest extends AbstractStructBase
{
    /**
     * The Token
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?\Scraper\ScraperDPD\ArrayType\ArrayOfString $Token = null;

    /**
     * Constructor method for GetSecureDataRequest
     *
     * @uses GetSecureDataRequest::setToken()
     */
    public function __construct(?\Scraper\ScraperDPD\ArrayType\ArrayOfString $token = null)
    {
        $this
            ->setToken($token)
        ;
    }

    /**
     * Get Token value
     */
    public function getToken(): ?\Scraper\ScraperDPD\ArrayType\ArrayOfString
    {
        return $this->Token;
    }

    /**
     * Set Token value
     */
    public function setToken(?\Scraper\ScraperDPD\ArrayType\ArrayOfString $token = null): self
    {
        $this->Token = $token;

        return $this;
    }
}
