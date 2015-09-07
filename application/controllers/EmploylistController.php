<?php
class EmploylistController extends Zend_Controller_Action {
    /*
     * Use to create the Object of the form page to call the form
     * Also use to set the object value of form to the view page
     */
    public function emplistAction() {
        //To make a Object of Application Form
        $form = new Application_Form_EmployList();
        //to make a Object of show form
        $showDetails = new Service_Show();
        //Use to call the show function
        $this -> view -> showDetails = $showDetails -> showDetails();
        //To set the value of Form object
        $this -> view -> form = $form;
    }

    /*
     *To save posted Details of the form
     */
    public function saveAction() {
        $saveDetails = new Service_Insert();
        $this -> saveDetails = $saveDetails -> insertDetails($this -> getRequest() -> getPost('emp_list'),
                                                             $this -> getRequest() -> getPost('startDate'),
                                                             $this -> getRequest() -> getPost('endDate'),
                                                             $this -> getRequest() -> getPost('financialYear'),
                                                             $this -> getRequest() -> getPost('financialMonth'));
        $mailId = new Service_Mail();
        $iteeMailId = $mailId -> getIteeMailId($this -> getRequest() -> getPost('emp_list'));
        $hrMailId = $mailId -> getHrMailId();
        $sendMail = new Web_Mail();
        $sendMail -> mail($hrMailId, $iteeMailId);
        $this -> _helper -> redirector('emplist', 'Employlist');

    }

}
?>