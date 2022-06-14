<?php

namespace App\Controller;


use App\Form\CategorieType;
use App\Entity\Categorie;
use App\Repository\CategorieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategorieController extends AbstractController
{
    #[Route('/categorie', name: 'app_categorie')]
    public function index(Request $request,EntityManagerInterface $manager,
    CategorieRepository $categorieRepository): Response
    {


        $categorie=new Categorie();
        $form = $this->createForm(CategorieType::class, $categorie);
        $form->handLeRequest($request);
        if($form->isSubmitted()&& $form->isValid())
        {
           $categories=$form->getData();
           $manager->persist($categorie);
           $manager->flush();

           return $this->redirectToRoute('app_categorie');
    
        }
        $categories=$categorieRepository->findAll();
        return $this->render('categorie/index.html.twig',
        ['form'=>$form->createView(), 'categories'=>$categories
        ]);
    }
}
