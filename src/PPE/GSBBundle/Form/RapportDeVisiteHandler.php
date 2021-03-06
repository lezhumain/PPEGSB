<?php
namespace PPE\GSBBundle\Form;

use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManager;
use PPE\GSBBundle\Entity\RapportDeVisite;

class RapportDeVisiteHandler {

	public function __construct(Form $form, Request $request, EntityManager $em){
		$this->form = $form;
		$this->request = $request;
		$this->em = $em;
	}

	public function process() {
		if ($this->request->getMethod() == 'POST') {
			$this->form->bind($this->request);
			if ($this->form->isValid()) {
				$this->onSuccess($this->form->getData());
				return true;
			}
		}
		return false;
	}


	public function OnSuccess(RapportDeVisite $prod) {
        $this->em->persist($prod);
        $this->em->flush();
	}

}