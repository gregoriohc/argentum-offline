<?php
namespace Argentum\Offline\Message;

/**
 * Offline Sign Response
 */
class SignResponse extends Response
{
    /**
     * {@inheritDoc}
     */
    public function getReference()
    {
        $data = $this->getData();
        /** @var \Argentum\Common\Document\Ticket $document */
        $document = $data['document'];
        return $document->getId();
    }
}