<?php

namespace App\Form;

use App\Entity\CaseDraft;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class CaseDraftType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('pet_name')
            ->add('res_name')
            ->add('case_type')
            ->add('case_type_name')
            ->add('filing_date')
            ->add('draft_id')
            ->add('draft_status')
            ->add('case_file', FileType::class, array('label' => 'Case File (PDF file)'));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => CaseDraft::class,
        ]);
    }
}
