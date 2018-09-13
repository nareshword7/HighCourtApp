<?php
// src/Controller/PSController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PSController extends Controller
{
    /**
     * @Route("/ps")
     */
    public function ps_home()
    {
    	//$cisEntityManager = $this->get('doctrine')->getManager('cis');
    	/* $entityManager = $this->getEntityManager();*/

    	//$query = $cisEntityManager->createQuery('Select pet_name from civil_t limit 2');

    	// returns an array of Product objects
    	//return $query->execute();

        //return $this->render('admin_cus/ps/main.html.twig');

        $sql = " Select string_agg(a.judge_name, ' & ' order by a.judge_name desc) as judgename, c.court_no from judge_name_t a 
   			inner join judge_t b on a.judge_code = b.judge_code
   			inner join court_t c on c.court_no  = b.court_no where cto_dt is null
   			group by c.court_no  "; 
       

    	$em = $this->getDoctrine()->getManager('cis');
    	$stmt = $em->getConnection()->prepare($sql);
    	$stmt->execute();
    	$result=  $stmt->fetchAll();

    	return $this->render('admin_cus/ps/main.html.twig', array('result' => $result));

    }

    /**
     * @Route("/getCases")
     */
    public function ps_submit(Request $request)
    {
    	$casetype =  $request->request->get("casetype")->getData();
        /*$sql = " Select string_agg(a.judge_name, ' & ' order by a.judge_name desc) as judgename, c.court_no from judge_name_t a 
   			inner join judge_t b on a.judge_code = b.judge_code
   			inner join court_t c on c.court_no  = b.court_no where cto_dt is null
   			group by c.court_no  "; 
       

    	$em = $this->getDoctrine()->getManager('cis');
    	$stmt = $em->getConnection()->prepare($sql);
    	$stmt->execute();
    	$result=  $stmt->fetchAll();

    	return $this->render('admin_cus/ps/main.html.twig', array('result' => $result));*/
    	return new Response('<html><body> This is a test '.$casetype.'</body></html>');

    }


}