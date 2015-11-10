<?php
namespace Argentum\Offline\Message;

use Argentum\Common\Message\AbstractResponse;
use Argentum\Common\Message\ResponseInterface;

/**
 * Offline Response
 */
class Response extends AbstractResponse implements ResponseInterface
{
    /**
     * {@inheritDoc}
     */
    public function isSuccessful()
    {
        return '200' == $this->getCode();
    }

    /**
     * {@inheritDoc}
     */
    public function getReference()
    {
        return false;
    }

    /**
     * Get response message
     *
     * @return string
     */
    public function getMessage()
    {
        return '';
    }

    /**
     * Get response status code
     *
     * @return string
     */
    public function getCode()
    {
        return '200';
    }
}