# find_ID

> **synopsis : `Datas::find_ID( $password , $database , $value )`**  
> `$password` : *string* -> contient le mot de passe  
> `$database` : *string* -> contient le nom de la DB  
> `$value` : *array of string* -> contient la recherche à effectuer  
> `return` : *boolean | array* -> retourne faux si l'opération à échoué, sinon retourne les IDs des ITEMs valides.  

Cette fonction cherche les ITEMs correspondant à la recherche et retourne leur ID.  

---

# Faire une recherche :

**recherche simple :**

```php
$value = array( '["PAYS"] == "FRANCE"' );
```

cela trouvera tous les ITEMs comportant au moins :

```json
{
    "PAYS" : "FRANCE"
}
```

**recherche profonde :**


```php
$value = array( '["USER"]["NAME"] == "sysadmin"' );
```

cela trouvera tous les ITEMs comportant au moins :

```json
{
    "USER" : {
        "NAME" : "sysadmin"
    }
}
```

**recherche multiple :**


```php
$value = array( '["PSEUDO"] == "sysadmin"' , '["PASSWORD"] == "my_password"' );
```

cela trouvera tous les ITEMs comportant au moins :

```json
{
    "NAME" : "sysadmin",
    "PASSWORD" : "my_password"
}
```

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
{ "INFO" : {"VERSION" : "1.0.0", "LASTCHANGE" : "01/01/2000"}, "DATA" : [{"PAYS" : "FRANCE"}, {"PAYS" : "BELGIQUE"}, {"PAYS" : "USA"}]}
```

## script :

**index.php :**  

```php
<?php
require("Datas.php");

$monITEM =  Datas::find_ID("PASSWORD", "maDB", array('["PAYS"] == "BELGIQUE"'));

?>
```

## après :

**valeur de `$monITEM` :**  

```php
array(
    0 => 1
);
```