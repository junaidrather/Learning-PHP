To connect with database we habe  to follow few steps
    - first will have all code within one file.
    - will be manange that single file into optimises ones 


Following are the steps:
    1) create a form in -> index.php <form action="./process.php"> will be handled by another file
        - pre res:No 
    2) That file is process.php -> code to recievie the data from form, then connect with database, and save the data.
        - pre req: have to create the database, and user
            -Steps: 
                1. open 127.0.0.1/phpmyadmin.
                2. goto user tab and fill the form with privilages.
                3. Click Go. 
        - Steps:
            a) create the process.php file.
            b) use POST/GET array which contians our data- verification can be done here.
            c) connect with database, we have to call func connect(server, user name , password, database name)
                Example of database application (DBMS):- Ms Access,MySql,127.0.0.1:3306
            d) query the connected databases table.
                -Query: its like a request or command or operation to mysql database.
                    Example: 
                        - SELECT -> Fetch Data. 
                            - INSERT INTO `user` (`id`, `fn`, `ln`, `age`) VALUES (NULL, 'Junaid', 'Ahmad', '25');
                        - INSERT -> Save Data.
                        - UPDATE -> Modify Data.
                        - DELETE -> delete data.
            e) close the connection created by connect function. 

