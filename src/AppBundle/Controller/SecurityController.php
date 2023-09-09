<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
/**
 * Security controller for handling authentication.
 */
class SecurityController extends Controller
{
    /**
     * Display the login form.
     *
     * This method handles displaying the login form and managing errors
     * during login attempts.
     *
     * @Route("/login", name="login")
     *
     * @param Request $request The Request object containing request data.
     *
     * @return Response The HTTP response with the login form or errors.
     */
    public function loginAction(Request $request)
    {
        $authenticationUtils = $this->get('security.authentication_utils');

        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', array(
            'last_username' => $lastUsername,
            'error'         => $error,
        ));
    }

    /**
     * Checkpoint for login verification.
     *
     * This method is used for login verification. However, the code
     * in this method is never executed as verification is handled
     * by the Symfony security component.
     *
     * @Route("/login_check", name="login_check")
     */
    public function loginCheck()
    {
        // This code is never executed.
    }

    /**
     * User logout.
     *
     * This method handles the process of logging out the currently
     * authenticated user. However, the code in this method is never
     * executed as logout is handled by the Symfony security component.
     *
     * @Route("/logout", name="logout")
     */
    public function logoutCheck()
    {
        // This code is never executed.
    }
}
