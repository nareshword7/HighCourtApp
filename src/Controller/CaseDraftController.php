<?php

namespace App\Controller;

use App\Entity\CaseDraft;
use App\Form\CaseDraftType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/case/draft")
 */
class CaseDraftController extends Controller
{
    /**
     * @Route("/", name="case_draft_index", methods="GET")
     */
    public function index(): Response
    {
        $caseDrafts = $this->getDoctrine()
            ->getRepository(CaseDraft::class)
            ->findAll();

        return $this->render('case_draft/index.html.twig', ['case_drafts' => $caseDrafts]);
    }

    /**
     * @Route("/new", name="case_draft_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $caseDraft = new CaseDraft();
        $form = $this->createForm(CaseDraftType::class, $caseDraft);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($caseDraft);
            $em->flush();

            return $this->redirectToRoute('case_draft_index');
        }
        

        return $this->render('case_draft/new.html.twig', [
            'case_draft' => $caseDraft,
            'form' => $form->createView(),
        ]);
    
    }

    /**
     * @Route("/{id}", name="case_draft_show", methods="GET")
     */
    public function show(CaseDraft $caseDraft): Response
    {
        return $this->render('case_draft/show.html.twig', ['case_draft' => $caseDraft]);
    }

    /**
     * @Route("/{id}/edit", name="case_draft_edit", methods="GET|POST")
     */
    public function edit(Request $request, CaseDraft $caseDraft): Response
    {
        $form = $this->createForm(CaseDraftType::class, $caseDraft);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('case_draft_edit', ['id' => $caseDraft->getId()]);
        }

        return $this->render('case_draft/edit.html.twig', [
            'case_draft' => $caseDraft,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="case_draft_delete", methods="DELETE")
     */
    public function delete(Request $request, CaseDraft $caseDraft): Response
    {
        if ($this->isCsrfTokenValid('delete'.$caseDraft->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($caseDraft);
            $em->flush();
        }

        return $this->redirectToRoute('case_draft_index');
    }
}
