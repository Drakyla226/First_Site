<?php
define("LIB","/core/class");
if (file_exists($_SERVER[DOCUMENT_ROOT].LIB."/CTable.php"))
  require($_SERVER[DOCUMENT_ROOT].LIB."/CTable.php");

define("LIB_meta","/core/meta");
if (file_exists($_SERVER[DOCUMENT_ROOT].LIB_meta."/meta_sql.php"))
  require($_SERVER[DOCUMENT_ROOT].LIB_meta."/meta_sql.php");

$obTable = new CTable(HOST, USER, PASSWORD, DB);

$DB = new mysqli(HOST, USER, PASSWORD, DB);
?>
