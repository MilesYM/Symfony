<?php

namespace YM\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityRepository;
use YM\TestBundle\Entity\Artist;
use YM\TestBundle\Form\ArtistType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class MusicianController extends Controller
{
    public function listAction()
    {
      //We load the artist Repository ..
    	$repository = $this->getDoctrine()
                   ->getManager()
                   ->getRepository('YMTestBundle:Artist');

      // .. To find all the Artists in the DB
		  $artists = $repository->findAll();

      //We strip_tags the biography
      foreach ($artists as $artist){

        $artist->setBiography(strip_tags($artist->getBiography()));
      }

      //And we return the view rendered by S2
      return $this->render('YMTestBundle:Musician:list.html.twig', array('artists' => $artists));
    }

    public function addAction()
    {
  		// We create an Artist Object
        $artist = new Artist;
       
        // We add the form fields
        $form = $this->createForm( new ArtistType, $artist);
       
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
            $em->persist($artist);
            $em->flush();

            $this->get('session')->getFlashBag()->add('info', 'Artist added successfully');
          // Everything is fine, we redirect the user
          return $this->redirect($this->generateUrl('ymtest_Artist'));
          }
        }
       
        // We pass the createView() form method to the viexw so that it can print the form if the user arrived on this page with a GET method (he didnt validate the form yet)
        return $this->render('YMTestBundle:Musician:add.html.twig', array(
          'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/Artist/review/{id}")
     * @ParamConverter("artist", class="YMTestBundle:Artist")
     */
    public function ReviewAction(Artist $artist)
    {
         return $this->render('YMTestBundle:Musician:review.html.twig', array('artist' => $artist));          
    }

    /**
     * @Route("/Artist/edit/{id}")
     * @ParamConverter("artist", class="YMTestBundle:Artist")
     */
    public function editAction(Artist $artist)
    {

        if (!$artist) {
            throw $this->createNotFoundException('Unable to find Artist entity.');
        }

        // We create the form from the external re-usable form made in TestBundle/Form/artist.php
        $form = $this->createForm( new ArtistType, $artist);
       
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

            $this->get('session')->getFlashBag()->add('info', 'Artist edited successfully'); 

          // Everything is fine, we redirect the user
          return $this->redirect($this->generateUrl('ymtest_Artist'));
          }
        }
       
        // We pass the createView() form method to the viexw so that it can print the form if the user arrived on this page with a GET method (he didnt validate the form yet)
        return $this->render('YMTestBundle:Musician:edit.html.twig', array(
          'form' => $form->createView(),
          'artist' => $artist
        ));
    }

    public function deleteAction(Artist $artist)
    {
		    // We get the EntityManager
		    $em = $this->getDoctrine()
		               ->getEntityManager();
		    
		    // We delete the article
	    	$em->remove($artist);
        $em->flush();

	    	$this->get('session')->getFlashBag()->add('info', 'Artist deleted successfully');
		 
		      // Puis on redirige vers l'accueil
		    return $this->redirect( $this->generateUrl('ymtest_Artist') );
    }
}