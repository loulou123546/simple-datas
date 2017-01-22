# set_INFO  

> **synopsis : `Datas::set_INFO( $password , $database , $version , $lastchange )`**  
> `$password` : *string* -> contient le mot de passe  
> `$database` : *string* -> contient le nom de la DB à modifier  
> `$version` : *string* -> contient la nouvelle valeur pour `"VERSION"`  
> `$lastchange` : *string* -> contient la nouvelle valeur pour `"LASTCHANGE"`  
> `return` : *boolean* -> retourne faux si l'opération à échoué, true sinon  

Cette fonction change les INFO du fichier `.json` par `$version` et `$lastchange` . 

---

# Exemple :   

## avant :  
  
```
folder
 |- Datas.php
 |- index.php
 |- data
     |- maDB.json
```
**maDB :**  

```JSON
{ "INFO" : {"VERSION" : "1.0.0", "LASTCHANGE" : "01/01/2000"}, "DATA" : [{"PAYS" : "FRANCE", "CONTINENT" : "EUROPE"}]}
```

## script :

**index.php :**  

```php
<?php
require("Datas.php");

Datas::set_INFO("PASSWORD", "maDB", "2.1.5", "22/01/2017");

?>
```

## après :

**maDB :**  

```JSON
{ "INFO" : {"VERSION" : "2.1.5", "LASTCHANGE" : "22/01/2017"}, "DATA" : [{"PAYS" : "FRANCE", "CONTINENT" : "EUROPE"}]}
```