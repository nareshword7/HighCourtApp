<?php
// src/Controller/HomeController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{

    public function index()
    {
        $user = $this->getUser();
        if(is_null($user))
        {
            return $this->redirect('/login');
        }
        if ($user->hasRole('ROLE_FILING'))
        {
            return $this->redirect('/efiling');
        }
        else if($user->hasRole('ROLE_ADMIN'))
        {
            return $this->redirect('/admincus');
        }
        else if($user->hasRole('ROLE_PS'))
        {
             return $this->redirect('/ps');
        }
        else 
        {
            return $this->redirect('/login');
        }

      /* return $this->render(
            'blog/index.html.twig'
        );*/
    }

    public function number()
    {
        $output = shell_exec('sh /home/naresh/Desktop/testhhh.sh');;

        return new Response(
            '<html><body>'.$output.'</body></html>'
        );
    }

    /**
     * @Route("/filing")
     */
    public function admin()
    {
        return new Response('<html><body>Admin page!</body></html>');
    }
}