<?php

namespace App\Controller;

use App\Entity\ContactUsForm;
use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class ContactUsController extends AbstractController
{
    public function index(Request $request)
    {
        $contact = new ContactUsForm();

        $form = $this->createForm(ContactType::class, $contact);

        $form->handleRequest($request);

        $isSuccess = $form->isSubmitted() && $form->isValid();

        return $this->render('contact_us/index.html.twig', [
            'controller_name' => 'ContactUsController',
            'form' => $form->createView(),
            'isSuccess' => $isSuccess
        ]);
    }
}
