<?php
/*-------------------------------------------------------+
| SYSTOPIA - Postcode Lookup for Austria                 |
| Copyright (C) 2017 SYSTOPIA                            |
| Author: M. Wire (mjw@mjwconsult.co.uk)                 |
|         B. Endres (endres@systopia.de)                 |
| http://www.systopia.de/                                |
+--------------------------------------------------------+
| This program is released as free software under the    |
| Affero GPL license. You can redistribute it and/or     |
| modify it under the terms of this license which you    |
| can read by viewing the included agpl.txt or online    |
| at www.gnu.org/licenses/agpl.html. Removal of this     |
| copyright header is strictly prohibited without        |
| written permission from the original author(s).        |
+--------------------------------------------------------*/

/* 
 * Autocomplete for postcode at
 * 
 */

class CRM_Postcodeat_Page_AJAX {
  
  function autocomplete() {
    $available_fields = array(
      'plznr' => 'plznr',
      'ortnam' => 'ortnam',
      'stroffi' => 'stroffi',
    );
    $plznr = CRM_Utils_Request::retrieve('plznr', 'String', CRM_Core_DAO::$_nullObject, FALSE, '');
    $ortnam = CRM_Utils_Request::retrieve('ortnam', 'String', CRM_Core_DAO::$_nullObject, FALSE, '');
    $stroffi = CRM_Utils_Request::retrieve('stroffi', 'String', CRM_Core_DAO::$_nullObject, FALSE, '');
    $return = CRM_Utils_Request::retrieve('return', 'String', CRM_Core_DAO::$_nullObject, FALSE, 'ortnam');

    try {
      $result = civicrm_api3('PostcodeAT', 'get', array(
        'sequential' => 1,
        'plznr' => $plznr,
        'ortnam' => $ortnam,
        'stroffi' => $stroffi,
        'return' => $return,
      ));
    }
    catch (Exception $e) {
      CRM_Utils_System::civiExit();
      return;
    }

    if (empty($result['is_error'])) {
      foreach($result['values'] as $value) {
        foreach ($value as $key => $entry) {
          $autocomplete[] = array('value' => $entry);
        }
      }
      echo json_encode($autocomplete);
    }
    CRM_Utils_System::civiExit();
  }
  
}

