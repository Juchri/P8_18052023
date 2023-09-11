<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Form\UserType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Controller for managing user operations.
 *
 * This controller handles operations related to users, including listing, creating,
 * and editing users.
 */
class UserController extends Controller
{
    /**
     * List users.
     *
     * This method displays a list of users.
     *
     * @Route("/admin/users", name="user_list")
     */
    public function listAction()
    {
        return $this->render('user/list.html.twig', ['users' => $this->getDoctrine()->getRepository('AppBundle:User')->findAll()]);
    }

    /**
     * Create a user.
     *
     * This method handles the creation of a new user.
     *
     * @Route("/users/create", name="user_create")
     *
     * @param Request $request The Request object containing request data.
     *
     * @return Response The HTTP response for user creation.
     */
    public function createAction(Request $request)
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $password = $this->get('security.password_encoder')->encodePassword($user, $user->getPassword());
            $user->setPassword($password);

            $em->persist($user);
            $em->flush();

            $this->addFlash('success', "L'utilisateur a bien été ajouté.");

            return $this->redirectToRoute('homepage');
        }

        return $this->render('user/create.html.twig', ['form' => $form->createView(),
        ]);
    }

    /**
     * Edit a user.
     *
     * This method handles the editing of an existing user.
     *
     * @Route("/users/{id}/edit", name="user_edit")
     *
     * @param User    $user    The user to be edited.
     * @param Request $request The Request object containing request data.
     *
     * @return Response The HTTP response for user editing.
     */
    public function editAction(User $user, Request $request)
    {
        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $password = $this->get('security.password_encoder')->encodePassword($user, $user->getPassword());
            $user->setPassword($password);

            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('success', "L'utilisateur a bien été modifié");

            return $this->redirectToRoute('user_list');
        }

        return $this->render('user/edit.html.twig', ['form' => $form->createView(), 'user' => $user]);
    }
}
