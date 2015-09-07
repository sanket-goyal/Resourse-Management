<?php
class Service_Insert {
    //use to save the details of posted values into a database table
    public function insertDetails($empId, $startDate, $endDate, $financialYear, $period) {
        $dt = new DateTime($startDate);
        $edt = new DateTime($endDate);
        $em = Zend_Registry::get("em");
        $user = new \Entities\FormPeriod();
        $user -> setEmpId($empId);
        $user -> setStartDate($dt);
        $user -> setEndDate($edt);
        $user -> setFinancialYear($financialYear);
        $user -> setPeriod($period);
        $em -> persist($user);
        $em -> flush();
    }
}

?>