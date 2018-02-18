<?php
/**
 * Created by PhpStorm.
 * User: Jérémy
 * Date: 14/02/2018
 * Time: 08:30
 */

namespace jr\PhotoBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Request;

class SecurityController extends Controller
{
    public function loginAction(Request $request){
        $em = $this->getDoctrine()->getManager();

        $menus = $em->getRepository('jrPhotoBundle:Menu')->findAll();

        $session = $request->getSession();
        $error = null;
        if ($request->getSession()->has(SecurityContext::AUTHENTICATION_ERROR)){
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }
        return $this->render('jrPhotoBundle:Security:login.html.twig', array(
            'last_username' => $session->get(SecurityContext::LAST_USERNAME),
            'error'=> $error,
            'menus' => $menus,

        ));
    }
}