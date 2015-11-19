<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

// añadidos
use AppBundle\Services\ExamenService;

/**
 * Class ExamenController
 * @package AppBundle\Controller
 */
class ExamenController extends Controller
{
    /**
     * @Route(
     *       path = "/examen",
     *       name = "app_default_examen"
     * )
     */
    public function examenAction()
    {
        // CREAR VISTA
        return $this->render('AppBundle::examen.html.twig');
    }




    /**
     * @Route(
     *      path = "examen/mayusculas",
     *      name = "app_default_examenMayusculas"
     * )
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function mayusculasAction(Request $request)
    { return $this->render('AppBundle::mayusculas.html.twig'); }

    /**
     * @Route(
     *      path = "examen/minusculas",
     *      name = "app_default_examenMinusculas"
     * )
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function minusculasAction(Request $request)
    { return $this->render('AppBundle::minusculas.html.twig'); }




    /**
     * @Route(
     *      path = "examen/resultado",
     *      name = "app_default_examenResultado"
     * )
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function resultadoAction(Request $request)
    {
        $texto1 = $request->request->get('texto1');
        $operacion = $request->request->get('operacion');

        $examen = $this->get('examen');
        $examen->setFrase1($texto1);

        if($operacion == 'mayuscula')
        {
            $examen->mayusculas();
            $texto1 = $examen->getFrase1();
            return $this->render( 'AppBundle::resultado.html.twig',[
                'titulo'        => 'Mayusculas',
                'texto1'        => $texto1,
                'texto2'        => ' '
            ]);

        }
        else
            if($operacion == 'minuscula')
            {
                $examen->mayusculas();
                $texto1 = $examen->getFrase1();
                return $this->render( 'AppBundle::resultado.html.twig',[
                    'titulo'        => 'Minusculas',
                    'texto1'        => $texto1,
                    'texto2'        => ' '
                ]);

            }

        $examen = $this->get('examen');

        $examen->setFrase($texto1);


        return $this->render('AppBundle::resultado.html.twig');
    }
}
