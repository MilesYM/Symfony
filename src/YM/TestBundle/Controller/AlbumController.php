<?php

namespace YM\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use YM\TestBundle\Entity\Album;
use YM\TestBundle\Entity\Artist;
use Doctrine\ORM\EntityRepository;
use YM\TestBundle\Form\AlbumType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class AlbumController extends Controller
{
    public function listAction($id=0)
    { 
        // We create an Artist Object
        $album = new Album;
        // J'ai raccourci cette partie, car plus rapide à écrire !
        $form = $this->createFormBuilder($album)
                   ->add('artist', 'entity', array('class'    => 'YMTestBundle:Artist',
                                            'property' => 'name',
                                            'multiple' => false,
                                            'expanded' => false ))
                   ->getForm();
   
      // We get the request type
        $request = $this->get('request');

        // If it is a POST request, the user validated the form
        if ($request->getMethod() == 'POST') {
          // We make the link Request <-> Form
          // Now, $request = Values entered by the user
          $form->bind($request);
            $data = $form->getData();
            $id= $data->getArtist()->getId();
        }
       
      $repository = $this->getDoctrine()
                         ->getManager()
                         ->getRepository('YMTestBundle:Album');
      
      if($id==0){
        $albums = $repository->findAll();
      }else{
        $albums = $repository->findBy(
            array('artist' => $id));
      }

      //We strip_tags the biographyx
      foreach ($albums as $album){

        $album->setSongs(strip_tags($album->getSongs()));
      } 
        // We pass the createView() form method to the viexw so that it can print the form if the user arrived on this page with a GET method (he didnt validate the form yet)
        return $this->render('YMTestBundle:Album:list.html.twig', array('form' => $form->createView(), 'albums' => $albums));         
    }

    /**
     * @Route("/Album/review/{id}")
     * @ParamConverter("album", class="YMTestBundle:Album")
     */
    public function ReviewAction(Album $album)
    {
        // We pass the createView() form method to the viexw so that it can print the form if the user arrived on this page with a GET method (he didnt validate the form yet)
        return $this->render('YMTestBundle:Album:review.html.twig', array('album' => $album));	        
    }

    public function addAction()
    {
     // We create an Artist Object
        $album = new Album;
       
        // We add the form fields
        $form = $this->createForm( new AlbumType, $album);
       
        // We get the request type
        $request = $this->get('request');

        // If it is a POST request, the user validated the form
        if ($request->getMethod() == 'POST') {
          // We make the link Request <-> Form
          // Now, $request = Values entered by the user
          $form->bind($request);
     
          // We validate the values
          if ($form->isValid()) {
            // We save $artist in the DB
            $em = $this->getDoctrine()->getManager();
            $em->persist($album);
            $em->flush();

            $this->get('session')->getFlashBag()->add('info', 'Album added successfully');
          // Everything is fine, we redirect the user
          return $this->redirect($this->generateUrl('ymtest_Album'));
          }
        }
       
        // We pass the createView() form method to the viexw so that it can print the form if the user arrived on this page with a GET method (he didnt validate the form yet)
        return $this->render('YMTestBundle:Album:add.html.twig', array(
          'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/Album/edit/{id}")
     * @ParamConverter("album", class="YMTestBundle:Album")
     */
    public function editAction(Album $album)
    {

        if (!$album) {
            throw $this->createNotFoundException('Unable to find Album entity.');
        }

        // We create the form from the external re-usable form made in TestBundle/Form/album.php
        $form = $this->createForm( new AlbumType, $album);
       
        // We get the request type
        $request = $this->get('request');

        // If it is a POST request, the user validated the form
        if ($request->isMethod('POST')) {
          // We make the link Request <-> Form
          // Now, $request = Values entered by the user
          $form->bind($request);
     
          // We validate the values
          if ($form->isValid()) {
            // We save $artist in the DB
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            $this->get('session')->getFlashBag()->add('info', 'Album edited successfully'); 

          // Everything is fine, we redirect the user
          return $this->redirect($this->generateUrl('ymtest_Album'));
          }
        }
       
        // We pass the createView() form method to the viexw so that it can print the form if the user arrived on this page with a GET method (he didnt validate the form yet)
        return $this->render('YMTestBundle:Album:edit.html.twig', array(
          'form' => $form->createView(),
          'album' => $album
        ));
    }

    public function deleteAction(Album $album)
    {

    	
		    // We get the EntityManager
		    $em = $this->getDoctrine()
		               ->getEntityManager();
		    
		  // We delete the article
	    	$em->remove($album);
		  	$em->flush();

	    	$this->get('session')->getFlashBag()->add('info', 'Album deleted successfully');
		 
		      // Puis on redirige vers l'accueil
		      return $this->redirect( $this->generateUrl('ymtest_Album') );
    }
}