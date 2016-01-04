<?php
namespace Argentum\Offline\Message;

/**
 * Offline Purchase Request
 */
class SignRequest extends AbstractRequest
{
    /**
     * {@inheritDoc}
     */
    protected function getFunction()
    {
        return 'sign';
    }

    /**
     * Get document to sign
     *
     * @return \Argentum\Common\Document\AbstractDocument|\Argentum\Common\Document\Ticket
     */
    public function getDocument()
    {
        return $this->getParameter('document');
    }

    /**
     * Set document to sign
     *
     * @param \Argentum\Common\Document\AbstractDocument $value
     * @return SignRequest
     */
    public function setDocument($value)
    {
        return $this->setParameter('document', $value);
    }

    /**
     * {@inheritDoc}
     */
    public function getData()
    {
        $this->validate('document');

        $data = array();
        $data['document'] = $this->getDocument();

        return array_merge(parent::getData(), $data);
    }

    /**
     * @param array $data
     * @return SignResponse
     */
    protected function createResponse($data)
    {
        return $this->response = new SignResponse($this, $data);
    }
}