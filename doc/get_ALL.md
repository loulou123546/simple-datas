# get_ALL

> ## synopsis : `Datas::get_ALL( $password , $database )`
> ### `$password` : *string* -> contient le mot de passe
> ### `$database` : *string* -> contient le nom de la DB à modifier
> ### `return` : *array | boolean* -> retourne faux si l'opération à échoué, sinon un *asscociative array* contenant la DB

Cette fonction retourne le contenu du fichier `.json` .

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

$retour = Datas::get_ALL("PASSWORD", "maDB");

?>
```

## après :

**valeur de `$retour` :**
```php
array(
    "INFO" => array(
        "VERSION" => "1.0.0",
        "LASTCHANGE" => "01/01/2000"
    ),
    "DATA" => array(
        0 => array(
            "PAYS" => "FRANCE",
            "CONTINENT" => "EUROPE"
        )
    )
);
```