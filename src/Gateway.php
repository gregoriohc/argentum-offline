<?php
namespace Argentum\Offline;

use Argentum\Common\AbstractGateway;

/**
 * Offline Gateway
 *
 * The Offline gateway is the default gateway used when no document online signature is needed.
 * It can be extended to set custom parameters or functionality for each country
 *
 * @see \Omnipay\Common\AbstractGateway
 */
class Gateway extends AbstractGateway
{
    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return 'Offline';
    }

    /**
     * {@inheritDoc}
     */
    public function getDefaultParameters()
    {
        return array(
            'countryCode' => '',
            'testMode' => false,
        );
    }

    /**
     * Get country code
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->getParameter('countryCode');
    }

    /**
     * Set country code
     *
     * @param string $value
     * @return $this
     */
    public function setCountryCode($value)
    {
        return $this->setParameter('countryCode', $value);
    }

    /**
     * Sign document
     *
     * @param array $parameters
     * @return Message\SignResponse
     */
    public function sign(array $parameters = array())
    {
        return $this->createRequest('\Argentum\Offline\Message\SignRequest', $parameters);
    }
}