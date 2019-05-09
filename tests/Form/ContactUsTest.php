<?php


namespace App\Tests\Form;


use App\Entity\ContactUsForm;
use App\Form\ContactType;
use Symfony\Component\Form\Test\TypeTestCase;

class ContactUsTest extends TypeTestCase
{
    public function testSubmitValidData() {
        $formData = [
            'name' => 'Name',
            'email' => 'Email',
            'message' => 'Message'
        ];

        $contactUsFormToCompare = new ContactUsForm();

        $form = $this->factory->create(ContactType::class, $contactUsFormToCompare);

        $contactUsForm = new ContactUsForm();
        $contactUsForm->setName($formData['name']);
        $contactUsForm->setEmail($formData['email']);
        $contactUsForm->setMessage($formData['message']);

        $form->submit($formData);

        $this->assertTrue($form->isSynchronized());

        $this->assertEquals($contactUsForm, $contactUsFormToCompare);

        $view = $form->createView();
        $children = $view->children;

        foreach (array_keys($formData) as $key) {
            $this->assertArrayHasKey($key, $children);
        }
    }
}