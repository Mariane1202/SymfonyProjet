<?php

namespace App\Controller;
use App\Form\SortieType;
use App\Entity\Sortie;
use App\Entity\Product;
use App\Repository\SortieRepository;
use App\Repository\Repository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SortieController extends AbstractController
{
    #[Route('/sortie', name: 'app_sortie')]
    public function index(Request $request,EntityManagerInterface $manager,
    SortieRepository $sortieRepository): Response
    {

        
        $sorties=new Sortie();
        //$product=new Product();
        $form = $this->createForm(SortieType::class, $sorties);
        $form->handLeRequest($request);
        if($form->isSubmitted()&& $form->isValid())
        {
           $sorties=$form->getData();
           $manager->persist($sorties);
           $manager->flush();
           //maj product
           $product=$manager->getRepository(Product::class)->find($sorties->getProduct()->getId());
           $stockTF=$product->getStock() - $sorties->getQuantite();
           $product->setStock($stockTF);
           $manager->flush();
           return $this->redirectToRoute('app_sortie');

          
    
        }
        $sorties=$sortieRepository->findAll();  
        return $this->render('sortie/index.html.twig',
        ['form'=>$form->createView(), 'sorties'=>$sorties
        ]);
       
    }
}
