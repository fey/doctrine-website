<?php

use Sculpin\Bundle\SculpinBundle\HttpKernel\AbstractKernel;

class SculpinKernel extends AbstractKernel
{
    protected function getAdditionalSculpinBundles()
    {
        return array(
            'Doctrine\Website\SculpinRstBundle\SculpinRstBundle',
            'Doctrine\Website\DoctrineSculpinBundle\DoctrineSculpinBundle',
            'Timbroder\Bundle\AlgoliaBundle\TimbroderAlgoliaBundle',
        );
    }
}
