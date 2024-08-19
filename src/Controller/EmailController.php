<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/')]
class EmailController extends AbstractController
{
    // Form
    #[Route(
        path: '',
        name: 'generator',
        methods: ['GET']
    )]
    public function __generator()
    {
       return $this -> render ('form_base.html.twig');
    }

    #[Route(
        path: '/code',
        name: 'sent_form',
        methods: ['POST']
    )]
    public function __sent(Request $request)
    {
        $hd_type = $request->get('hd_type') ?? 'wo_hd'; // ?? default without header
        $f_fami  = $request->get('f_fami') ?? 'Arial, sans-serif'; // ?? default Arial
        $f_size = $request->get('f_size') ?? '16'; // ?? default 16px
        //dd($request->get('f_fami')); //dump and die 
       return $this -> render ('email/email_layout.html.twig',[
        'hd_type' => $hd_type,
        'shape' => $request->get('shape'),
        'logo' => $request->get('logo'),
        'footer' => $request->get('footer'),
        'color_key' => $request->get('color_key'),
        'color_bg' => $request->get('color_bg'),
        'color_footer' => $request->get('color_footer'),
        'f_fami' => $f_fami,
        'f_size' => $f_size,
        ]);
    }
}