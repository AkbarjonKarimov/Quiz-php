<?php

if ($_COOKIE['role_id'] == '1') {
  include 'views/subject/index.php';
}

if ($_COOKIE['role_id'] == '2') {
  include 'views/student/index.php';
}
