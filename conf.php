<?php
 define( "DB_SERVER",    getenv('OPENSHIFT_MYSQL_DB_HOST') );
 
 define( "DB_USER",      getenv('OPENSHIFT_MYSQL_DB_USERNAME') );
 
 define( "DB_PASSWORD",  getenv('OPENSHIFT_MYSQL_DB_PASSWORD') );
 
 define( "DB_DATABASE",  getenv('OPENSHIFT_APP_NAME') );
 
 
 mysql_connect(DB_SERVER,DB_USER,DB_PASSWORD) or die(mysql_error());
mysql_select_db(DB_DATABASE) or die(mysql_error());
 
 $q = "select * from salary";
 $result = mysql_query($q) or die(mysql_error());
 
 while ($row = mysql_fetch_array($result))
         {
                 echo $row['eno'];
                 echo $row['fname'];
                 echo $row['salary'];
         }
mysql_close();
?>
