<?php

namespace jr\PhotoBundle\Controller;

use jr\PhotoBundle\Entity\Menu;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $menus = $em->getRepository('jrPhotoBundle:Menu')->findAll();

        $em = $this->getDoctrine()->getManager();

        $photos = $em->getRepository('jrPhotoBundle:Photo')->findBy([],['id' => 'DESC']);

        return $this->render('jrPhotoBundle:Default:index.html.twig', array(
            'menus'=> $menus,
            'photos'=> $photos,
        ));
    }

    public function photo_menuAction(Menu $menu){
        $em = $this->getDoctrine()->getManager();

        $menus = $em->getRepository('jrPhotoBundle:Menu')->findAll();
        $id = $menu->getId();
        $em = $this->getDoctrine()->getManager();
        $photos = $em->getRepository('jrPhotoBundle:Photo')
            ->findByMenu($menu, ['id' => 'DESC']);

        return $this->render('jrPhotoBundle:Default:photo_menu.html.twig', array(
            'menus'=> $menus,
            'photos'=> $photos,
        ));
    }
}
