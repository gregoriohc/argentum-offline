<?php
namespace Argentum\Offline\Message;

use Argentum\Common\Message\AbstractRequest as CommonAbstractRequest;

/**
 * Offline Moderna Abstract Request
 */
abstract class AbstractRequest extends CommonAbstractRequest
{
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
     * @param $value
     * @return AbstractRequest
     */
    public function setCountryCode($value)
    {
        return $this->setParameter('countryCode', $value);
    }

    /**
     * Get Offline endpoint
     *
     * @return string
     */
    public function getEndpoint()
    {
        return '';
    }

    /**
     * {@inheritDoc}
     */
    public function getData()
    {
        $data = [
            'countryCode'   => $this->getCountryCode(),
        ];

        return $data;
    }

    /**
     * {@inheritDoc}
     */
    public function sendData($data)
    {
        return $this->response = $this->createResponse($data);
    }

    /**
     * @param array $data
     * @return Response
     */
    protected function createResponse($data)
    {
        return $this->response = new Response($this, $data);
    }

    abstract protected function getFunction();
}
