<?php

namespace App\Form;

use App\Entity\Book;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class BookType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'label' => 'Title',
                'required' => true,
            ])
            ->add('author',TextType::class, [
                'label' => 'Author',
                'required' => false,
            ])
            ->add('isbn',TextType::class, [
                'label' => 'ISBN',
                'required' => false,
            ])
            ->add('year',TextType::class, [
                'label' => 'Year',
                'required' => false,
            ])
            ->add('publisher',TextType::class, [
                'label' => 'Publisher',
                'required' => false,
            ])
            ->add('description',TextType::class, [
                'label' => 'Description',
                'required' => false,
            ]);
    }

        public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Book::class,
        ]);
    }
}
