<?php

namespace App\Controller;
use App\Form\EntreeType;
use App\Entity\Entree;
use App\Entity\Product;
use App\Repository\EntreeRepository;
use App\Repository\Repository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EntreeController extends AbstractController
{
    #[Route('/entree', name: 'app_entree')]
    public function index(Request $request,EntityManagerInterface $manager,
    EntreeRepository $entreeRepository): Response
    {


        
        $entrees=new Entree();
        //$product=new Product();
        $form = $this->createForm(EntreeType::class, $entrees);
        $form->handLeRequest($request);
        if($form->isSubmitted()&& $form->isValid())
        {
           $entrees=$form->getData();
           $manager->persist($entrees);
           $manager->flush();
           //maj product
           $product=$manager->getRepository(Product::class)->find($entrees->getProduct()->getId());
           $stockT=$product->getStock() + $entrees->getQuatite();
           $product->setStock($stockT);
           $manager->flush();
           return $this->redirectToRoute('app_entree');

         
    
        }
        $entrees=$entreeRepository->findAll();  
        return $this->render('entree/index.html.twig',
        ['form'=>$form->createView(), 'entrees'=>$entrees
        ]);
    }
       
    }

