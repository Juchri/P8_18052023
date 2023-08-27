<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Default controller for the homepage.
 */
class DefaultController extends Controller
{
    /**
     * Displays the homepage.
     *
     * @Route("/", name="homepage")
     *
     * @param Request $request The current HTTP request.
     * @return Response The HTTP response with the content of the homepage.
     */
    public function indexAction(Request $request)
    {
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
}
