<?php

class Theme {
  function toggle() {
    $_SESSION['theme'] = $_SESSION['theme'] === 'dark' ? 'light' : 'dark';
    header('Location: ' . $_SERVER['HTTP_REFERER']);
  }
}