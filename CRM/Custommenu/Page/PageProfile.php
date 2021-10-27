<?php
use CRM_Custommenu_ExtensionUtil as E;

class CRM_Custommenu_Page_PageProfile extends CRM_Core_Page {

  public function run() {
    // Example: Set the page-title dynamically; alternatively, declare a static title in xml/Menu/*.xml
    CRM_Utils_System::setTitle(E::ts('PageProfile'));
    CRM_Utils_System::redirect(CRM_Utils_System::url('civicrm/contact/view', 'reset=1&cid=' . CRM_Core_Session::getLoggedInContactID()));

    // Example: Assign a variable for use in a template
    $this->assign('currentTime', date('Y-m-d H:i:s'));

    parent::run();
  }

}
