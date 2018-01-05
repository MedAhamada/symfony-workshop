<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 05/01/2018
 * Time: 18:40
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class HomeController extends Controller
{

    /**
     * @Route("/hello")
     */
    public function helloAction()
    {
        return $this->render('default/hello.html.twig');
    }


}