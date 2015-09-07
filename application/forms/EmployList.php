<?php
class Application_Form_EmployList extends Zend_Form {
    /**
     * Use to create a form page
     * This form page contains Start date calender text Field,End date calender text Field,
     * Financial year, Financial month(DropDown Field)
     * One hidden text field which is getting the value of the checked Id by using jquery method
     * Also a submit button to perform submit action
     */
    public function init() {
        $this->setAttrib('class', 'form-horizontal'); // Bootstrap Form
        //To go on Other action after Click on submit/send button
        $this -> setAction('/employlist/save');
        //To set the method
        $this -> setMethod('post');
        //To add an element in the form
        $this->addElement('text','startDate',
                        array(
                            'label'=>'Start Date',
                            'class'   => 'startDate',
                            'required'=>true,
                            'filters'=>array('StringTrim')
                        )
                );
        $this->addElement('text','endDate',
                        array(
                            'label'   =>'End Date',
                            'class'   => 'endDate' ,
                            'required'=>true,
                            'filters' =>array('StringTrim')
                        )
                );
        $this->addElement('Select','financialYear',
                        array(
                            'label'        => 'Financial Year',
                            'class'        => 'dropup',
                            'value'        => 'financialYear',
                            'multiOptions' => 
                                            array('2015'=>'2015','2016'=>'2016',
                                                  '2017'=>'2017','2018'=>'2018',
                                                  '2019'=>'2019','2020'=>'2020',
                                                  '2021'=>'2021','2022'=>'2022',
                                                  '2023'=>'2023','2024'=>'2024',
                                                  '2025'=>'2025','2026'=>'2026',
                                                  '2027'=>'2027','2028'=>'2028',
                                                  '2029'=>'2029','2030'=>'2030',
                                                  '2031'=>'2031','2032'=>'2032'
                                            )
                        )
                );      
        $this->addElement('Select','financialMonth',
                        array(
                            'label'        => 'Financial Month',
                            'value'        => 'financialMonth',
                            'multiOptions' => 
                                            array('Jan'=>'Jan','Feb'=>'Feb',
                                                  'Mar'=>'Mar','Apr'=>'Apr',
                                                  'May'=>'May','Jun'=>'Jun',
                                                  'Jul'=>'Jul','Aug'=>'Aug',
                                                  'Sep'=>'Sep','Oct'=>'Oct',
                                                  'Nov'=>'Nov','Dec'=>'Dec'
                                            )
                        )
                );
        $emp_list = new Zend_Form_Element_Hidden('emp_list');
        $emp_list->setAttrib('class', 'form-control');
        $emp_list->setDecorators(
        $this->getBootstrapDecorator());
        $this->addElement($emp_list ); 
        /*$this->addElement('text','emp_list',
                        array(
                            'label'        =>'',
                            'value'        =>'',
                            'id'           =>'emp_list',
                            'multiOptions' => array(),

                        )
                ); */         
        $this->addElement('submit', 'submit',
                        array(
                            'ignore'   => true,
                            'label'    => 'Send',
                            'class'=>"btn btn-default"
                        )
                );
        $this -> setElementDecorators(array('ViewHelper', 'Label'));
    }
    private function getBootstrapDecorator()
    {
        return array(
            'ViewHelper',
            'Description',
            'Errors',
            array(
                'Label',
                array(
                    'tag' => 'label',
                    'class' => 'control-label'
                )
            ),
            array(
                'HtmlTag',
                array(
                    'tag' => 'div',
                    'class' => 'form-group'
                )
            )
        );
    }

}
?>