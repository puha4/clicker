<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Click;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ReferrerController extends Controller
{
    /**
     * @Route("/referrers", name="referrer_bad_referrers")
     */
    public function badReferrersAction()
    {
        $em = $this->getDoctrine()->getManager();

        $badReferrers = $em->getRepository(Click::class)->getBadReferrers();

        return $this->render('@App/Referrer/badReferrers.html.twig', [
            'badReferrers' => $badReferrers
        ]);
    }
}