<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactUsController extends AbstractController
{
    public function index()
    {
        $contact = new Contact();

        $form = $this->createForm(ContactType::class, $contact);

        return $this->render('contact_us/index.html.twig', [
            'controller_name' => 'ContactUsController',
            'form' => $form->createView(),
        ]);
    }
}
