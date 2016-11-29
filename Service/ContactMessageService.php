<?php

namespace Doctoubib\ModelsBundle\Service;

use Doctoubib\ModelsBundle\Repository\ContactMessageRepository;
use Doctoubib\ModelsBundle\Entity\ContactMessage;

class ContactMessageService
{
    /**
     * @var ContactMessageRepository
     */
    protected $contactMessageRepository;

    public function __construct(ContactMessageRepository $contactMessageRepository)
    {
        $this->contactMessageRepository = $contactMessageRepository;
    }

    public function save($params)
    {
        $contactMessage = new ContactMessage();
        $contactMessage->setFirstname($params['firstname']);
        $contactMessage->setLastname($params['lastname']);
        $contactMessage->setEmail($params['email']);
        $contactMessage->setPhone($params['phone']);
        $contactMessage->setSubject($params['subject']);
        $contactMessage->setMessage($params['message']);

        $this->contactMessageRepository->save($contactMessage);
    }
}