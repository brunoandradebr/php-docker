<?php

use App\System\Controller;
use App\Model\Contact as ContactModel;

class Contact extends Controller {

  public function index() {

    $contacts = ContactModel::list();

    $this->view('contact.index', $contacts);

  }

  public function edit() {

    [$id] = $this->getParams();

    $contact = ContactModel::getById($id);

    $this->view('contact.edit', $contact);
  }

}