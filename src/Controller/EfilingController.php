<?php
// src/Controller/HomeController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EfilingController extends Controller
{
  
    
    /**
     * @Route("/efiling")
     */
    public function admincus()
    {
    	$cisEm = $this->get('doctrine')->getManager('cis');
        $connection = $cisEm->getConnection();
        $statement = $connection->prepare("SELECT something FROM somethingelse WHERE id = :id");
        $statement->execute();
        $results = $statement->fetchAll();
        return $this->render('efiling/filing/main.html.twig');
    }

    



}