<?php
// src/Controller/HomeController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminCustomeController extends Controller
{
  
    
    /**
     * @Route("/admincus")
     */
    public function admincus()
    {
        /*return new Response('<html><body> I  am at admin!</body></html>');*/
        return $this->render('admin_cus/dashboard/main.html.twig');
    }

    /**
     * @Route("/admincus/runscript")
     */
    public function runscript()
    {
        $output = shell_exec('/home/naresh/Desktop/newhgscript.sh');
		return new Response(
            '<div>'.$output.'</div>'
        );

        //return $this->render('admin_cus/dashboard/main.html.twig');
    }
    /**
     * @Route("/admincus/certifiedscript")
     */
    public function certifiedscript()
    {
        $output = shell_exec('/home/naresh/Desktop/certifiedcopy.sh');
        return new Response(
            '<div>'.$output.'</div>'
        );

        //return $this->render('admin_cus/dashboard/main.html.twig');
    }
    

}