<?php

namespace YM\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use YM\TestBundle\Entity\Album;
use YM\TestBundle\Entity\Artist;
use Doctrine\ORM\EntityRepository;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	$repository = $this->getDoctrine()
                   ->getManager()
                   ->getRepository('YMTestBundle:Album');
 
		$albums = $repository->findAll();

    	$repository = $this->getDoctrine()
                   ->getManager()
                   ->getRepository('YMTestBundle:Artist');
 
		$artists = $repository->findAll();

        return $this->render('YMTestBundle:Default:index.html.twig', array('albums' => $albums, 'artists' => $artists));
    }
}
