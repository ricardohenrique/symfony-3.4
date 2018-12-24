<?php

namespace CodeExperts\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * @Route("/users")
 * @package CodeExperts\AdminBundle\Controller
 */
class UserController extends Controller
{
    /**
     * @Route("/")
     * @return Response
     */
    public function indexAction()
    {
        $users = $this->getDoctrine()->getRepository("AdminBundle:User")
                      ->findAll();
        return $this->render("AdminBundle:User:index.html.twig", ['users' => $users]);
    }
}
