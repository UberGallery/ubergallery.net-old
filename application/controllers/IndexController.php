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