# Using-PHP-data-object-PDO-class
A simple illustration of how to use the  PDO class to manage database connections 

*PHP Data Objects (PDO) is the class that connects to the database and allows you to
  interact with it;

*In order to connect to the database,we need to instantiate an object from class PDO;

*The constructor of the class expects three arguments which are data source name(DSN)which describes the type of databse to be used, Database username and Password in the following format 
			******
$dbConfig = Config::getInstance()->get('db');
$db = new PDO(
'mysql:host=127.0.0.1;dbname=bookstore',
$dbConfig['user'],
$dbConfig['password']
);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
			*******

*The app.json  file contains database configurations ie database username & password. You can include other application`s configurations in this file.




 *
