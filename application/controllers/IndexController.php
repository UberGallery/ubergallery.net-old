<?php
class IndexController extends Zend_Controller_action
{
    public function init()
    {
        $this->view->css    = array();
        $this->view->js     = array();
    }

    public function indexAction()
    {
        $this->view->title  = 'UberGallery - The Simple PHP Photo Gallery';
    }

    public function demoAction()
    {
        $this->view->title  = 'Demo';
        $this->view->css[]  = '/demo-gallery/ubergallery/resources/css/colorbox.css';
        $this->view->css[]  = '/css/ubergallery.css';
        $this->view->js[]   = 'https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js';
        $this->view->js[]   = '/demo-gallery/ubergallery/resources/js/jquery.colorbox.js';
    }

    public function installationAction()
    {
        $this->view->title  = 'Installation';
    }

    public function configurationAction()
    {
        $this->view->title  = 'Configuration';
    }

    public function contactAction()
    {
        $this->view->title  = 'Contact';
    }

    public function versionCheckAction()
    {
        // Disable layout and don't render the view
        $this->_helper->layout->disableLayout();
        $this->_helper->viewRenderer->setNoRender(true);

        $currentVersion = "1.6.3";
        $clientVersion = $_GET['ver'];

        if ($clientVersion < $currentVersion) {
            echo "upgrade";
        } elseif ($clientVersion == $currentVersion) {
            echo "latest";
        } elseif ($clientVersion > $currentVersion) {
            echo "development";
        } else {
            echo "unknown-version";
        }
    }
}