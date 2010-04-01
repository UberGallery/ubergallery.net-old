<?php
class IndexController extends Zend_Controller_action
{
    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $this->view->title = 'UberGallery - The Simple PHP Photo Gallery';
    }

    public function installationAction()
    {
        $this->view->title = 'Installation';
    }

    public function customizeAction()
    {
        $this->view->title = 'Customize';
    }

    public function faqAction()
    {
        $this->view->title = 'FAQs';
    }

    public function contactAction()
    {
        $this->view->title = 'Contact';
    }
}