<?php
/**
 * Created by PhpStorm.
 * User: francescolevanti
 * Date: 01/01/2018
 * Time: 13:57
 */

namespace flevanti\PhpQueueSystem;


class PhpQueueSystem {

  protected $verbose = FALSE;

  function __construct($verbose = NULL) {
    if (is_null($verbose)) {
      $this->verbose = PHP_SAPI == 'cli';
    }
    elseif ($verbose === TRUE) {
      $this->verbose = TRUE;
    }
    else {
      $this->verbose = FALSE;
    }

    $this->e("WELCOME TO PHP QUEUE SYSTEM");
  }

  protected function e($txt, $nl = PHP_EOL) {
    if (!$this->verbose) {
      return;
    }
    echo date("d-m-Y H:i:s   ") . $txt . $nl;
  }

}