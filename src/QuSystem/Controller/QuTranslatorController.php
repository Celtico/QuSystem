<?php
/**
 * @Author: Cel Ticó Petit
 * @Contact: cel@cenics.net
 * @Company: Cencis s.c.p.
 */

namespace QuSystem\Controller;

use QuAdmin\Controller\AbstractController;

class QuTranslatorController extends AbstractController
{


    protected  $qu_admin_service;
    protected  $qu_translator_model;


    public function indexAction(){
        $this->getQuAdminService();
        $quAdmin = $this->qu_admin_service->getIndex();
        $quAdmin->setQuAdminModelOptions($this->qu_translator_model);
        return $quAdmin->getViewModel();
    }


    public function QuAdminTableAjaxAction()
    {
        $this->getQuAdminService();
        $quAdmin = $this->qu_admin_service->getAjax();
        $quAdmin->setQuAdminModelOptions($this->qu_translator_model);
        return $quAdmin->getViewModel();
    }


    public function addAction()
    {
        $this->getQuAdminService();
        $quAdmin = $this->qu_admin_service->getAdd();
        $quAdmin->setQuAdminModelOptions($this->qu_translator_model);
        return $quAdmin->getViewModel();
    }


    public function editAction()
    {
        $this->getQuAdminService();
        $quAdmin = $this->qu_admin_service->getEdit();
        $quAdmin->setQuAdminModelOptions($this->qu_translator_model);
        return $quAdmin->getViewModel();
    }



    public function duplicateAction()
    {
        $this->getQuAdminService();
        $quAdmin = $this->qu_admin_service->getDuplicate();
        $quAdmin->setQuAdminModelOptions($this->qu_translator_model);
        return $quAdmin->getViewModel();
    }


    public function deleteAction()
    {
        $this->getQuAdminService();
        $quAdmin = $this->qu_admin_service->getDelete();
        $quAdmin->setQuAdminModelOptions($this->qu_translator_model);
        return $quAdmin->getViewModel();
    }

    public function getQuAdminService(){
        $this->qu_admin_service = $this->getServiceLocator()->get('qu_admin_service');
        $this->qu_translator_model = $this->getServiceLocator()->get('qu_translator_model');
        return $this;
    }


}