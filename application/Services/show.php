<?php
class Service_Show {
    /**
     * This function is use to fetch all the details from Login table
     * it returns all the fetched value
     */
    public function showDetails() {
        $em = Zend_Registry::get("em");
        /*
         * Here Get Repositry is use to get login table
         * Find all() is use to Finds all entities in the repository.
         */
        $result = $em -> getRepository('Entities\\Login')
                      -> findAll();
        return $result;
    }

}
?>