<?php
class Service_Mail {
    /*
     * Query to get the id of HR from login table
     */
    public function getHrMailId() {
        $em = Zend_Registry::get("em");
        $qb = $em -> createQueryBuilder();
        $qb -> select('l.email')
            -> from('Entities\\Login', 'l')
            -> where('l.userType = :hrMail')
            -> setParameter('hrMail', 'hr');
        $query = $qb -> getQuery();
        $result = $query -> getSingleResult();
        return $result;
    }

    /*
     * Query to get the id of selected employees from login table
     */
    public function getIteeMailId($empId) {
        $m = explode(",", $empId);
        $id = array();
        foreach ($m as $d) {
            $id[] = $d;
        }
        $em = Zend_Registry::get("em");
        $qb = $em -> createQueryBuilder();
        $qb -> select('l.email')
            -> from('Entities\\Login', 'l')
            -> where('l.empId IN (:emailId)')
            -> setParameter('emailId', $id);
        $query = $qb -> getQuery();
        $result = $query -> getArrayResult();
        return $result;
    }

}
?>