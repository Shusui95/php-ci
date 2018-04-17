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
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

/**
 * Class DefaultController
 *
 * @package AppBundle\Controller
 */
class DefaultController extends Controller
{
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @Route("Hello world", name="helloWorld")
     * @Method("GET")
     *
     *
     * @ApiDoc (
     *
     *  description="Simple hello world route",
     *  section="Club",
     *
     *  parameters={
     *  }
     * )
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
}
