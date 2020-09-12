# SearchDataFromDatabaseUsingPHP

Using MySQL and PHP , show desired table in print and there is a search Button where one can easily search data in order to find desired information with enough details.

<h3>Question</h3>

<h5>Table data must be come from database
Beythost link must be provided</h5>

Answer : 

I have added this in bytehost.

  http://saadsalim278.byethost15.com/Lab-8/index.php

Process to upload your code in ByteHost is given below :

<b>How to Create a MYSQL Database in BYTE HOST</b>

1. Login into your account.

2. Scroll down your dashboard, you will find <b>Databases</b> , from there select mysql databases option.

3. Then create the database, remember the name because it is important.

4. If you scroll down, you will see a option called <b>Current Databases</b>
    
    There will be your current mysql db name, mysql user name, mysql password, mysql host name. Remember those.
 
5. After creating database, click on phpmyadmin, you will see exactly localhost type page but different ip address (not necessary to remember the ip)
  
  Import the sql file from your computer. (you know how to import)
  
 Successfully your BYTE HOST mysql setup is completed!
 
 
 Now, go to the dashboard, click on File Manager from Files, go to the htdocs, upload your folder.
 
 
 Before doing these, 
  
        go to to your php file,
        
            $servername = "mysql host name"; // put your host mysql name
            
            $username = "mysql user name"; // put your user mysql name
            
            $password = "mysql password";  // In this case use your VP panel password
            
            $dbname = "mysql db name";  // put your db mysql name

            $connection = mysqli_connect($servername, $username, $password, $dbname);
            
Your page will connect with your database.

If you have issues, rise a question in issues panel.

If you love my work, mark a star. Thank you.
