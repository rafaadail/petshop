<?php

namespace App\Controller;

use App\Entity\Animal;
use App\Entity\Cliente;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="default")
     * @Template("default/index.html.twig")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();

        $qts_animais = $em->getRepository(Cliente::class)->qtsAnimaisPorCliente();

        $qts_raca = $em->getRepository(Animal::class)->qtsPorRaca();

        return [
            'qts_animais' => $qts_animais,
            'qts_racas'  => $qts_raca
        ];
    }
}
