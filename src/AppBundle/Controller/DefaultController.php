<?php
/**
 * DefaultController class
 *
 */
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class DefaultController
 *
 * @package AppBundle\Controller
 */
class DefaultController extends Controller
{
    /**
     * @Route("/", name="hello_world")
     * @Method("GET")
     *
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render(
            'default/index.html.twig', [
            'base_dir' => realpath(
                $this->getParameter(
                    'kernel.project_dir'
                )
            ) . DIRECTORY_SEPARATOR,
            ]
        );
    }

    /**
     * @Route("/home", name="home")
     * @Method("GET")
     *
     */
    public function homeAction()
    {
        // replace this example code with whatever you need
        return $this->render(
            'default/home.html.twig', [
            'base_dir' => realpath(
                $this->getParameter(
                    'kernel.project_dir'
                )
            ) . DIRECTORY_SEPARATOR,
            ]
        );
    }
}
