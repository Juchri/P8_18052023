<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Task;
use AppBundle\Form\TaskType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Controller for managing tasks.
 *
 * This controller handles operations related to tasks, including listing, creating,
 * editing, toggling status, and deleting tasks.
 */
class TaskController extends Controller
{
    /**
     * List tasks.
     *
     * This method displays a list of tasks.
     *
     * @Route("/tasks", name="task_list")
     */
    public function listAction()
    {
        return $this->render('task/list.html.twig', ['tasks' => $this->getDoctrine()->getRepository('AppBundle:Task')->findAll()]);
    }

    /**
     * Create a task.
     *
     * This method handles task creation.
     *
     * @Route("/tasks/create", name="task_create")
     *
     * @param Request       $request     The Request object containing request data.
     * @param UserInterface $currentUser The currently authenticated user.
     *
     * @return Response The HTTP response for task creation.
     */
    public function createAction(Request $request, UserInterface $currentUser)
    {
        $task = new Task();
        $form = $this->createForm(TaskType::class, $task);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $task->setUser($currentUser);

            $em = $this->getDoctrine()->getManager();
            $em->persist($task);
            $em->flush();

            $this->addFlash('success', 'The task has been successfully added.');

            return $this->redirectToRoute('task_list');
        }

        return $this->render('task/create.html.twig', ['form' => $form->createView()]);
    }

    /**
     * Edit a task.
     *
     * This method handles task editing.
     *
     * @Route("/tasks/{id}/edit", name="task_edit")
     *
     * @param Task          $task        The task to be edited.
     * @param Request       $request     The Request object containing request data.
     * @param UserInterface $currentUser The currently authenticated user.
     *
     * @return Response The HTTP response for task editing.
     */
    public function editAction(Task $task, Request $request, UserInterface $currentUser)
    {
        if ($task->getUser() == $currentUser) {
            $form = $this->createForm(TaskType::class, $task);

            $form->handleRequest($request);
    
            if ($form->isValid()) {
                $this->getDoctrine()->getManager()->flush();
    
                $this->addFlash('success', 'La tâche a bien été modifiée.');
    
                return $this->redirectToRoute('task_list');
            }
    
            return $this->render('task/edit.html.twig', [
                'form' => $form->createView(),
                'task' => $task,
            ]);
        } else {
            $this->addFlash('error', 'Cette tâche ne peut être modifiée que par son auteur.');
            return $this->redirectToRoute('task_list');
        }
    }

    /**
     * Toggle task status.
     *
     * This method toggles the status of a task.
     *
     * @Route("/tasks/{id}/toggle", name="task_toggle")
     *
     * @param Task $task The task to be toggled.
     *
     * @return Response The HTTP response for toggling task status.
     */
    public function toggleTaskAction(Task $task)
    {
        $task->toggle(!$task->isDone());
        $this->getDoctrine()->getManager()->flush();

        $this->addFlash('success', sprintf('La tâche %s a bien été marquée comme faite.', $task->getTitle()));

        return $this->redirectToRoute('task_list');
    }

    /**
     * Delete a task.
     *
     * This method handles task deletion.
     *
     * @Route("/tasks/{id}/delete", name="task_delete")
     *
     * @param Task          $task        The task to be deleted.
     * @param UserInterface $currentUser The currently authenticated user.
     *
     * @return Response The HTTP response for task deletion.
     */
    public function deleteTaskAction(Task $task, UserInterface $currentUser)
    {
        if ($task->getUser() == $currentUser) {

            $em = $this->getDoctrine()->getManager();
            $em->remove($task);
            $em->flush();
    
            $this->addFlash('success', 'La tâche a bien été supprimée.');

            return $this->redirectToRoute('task_list');
        } else {
            $this->addFlash('error', 'Cette tâche ne peut être suprimée que par son auteur ou un admin.');
            return $this->redirectToRoute('task_list');
        }
    }
}
