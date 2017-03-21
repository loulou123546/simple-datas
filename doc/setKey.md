# setKey

> **synopsis : `Datas::setKey( $password , $key , $value )`**  
> `$password` : *string* -> contient le mot de passe  
> `$key` : *string* -> contient le nom de la clé à modifier  
> `$value` : *any* -> contient la nouvelle valeur de la clé  
> `return` : *boolean* -> retourne faux si l'opération à échoué, vrai sinon  

Cette fonction modifie le contenu de la clé `$key` (dans le fichier `__keys__.json`) par `$value`. 

---

# Exemple : 

## avant :

```
folder
 |- Datas.php
 |- index.php
 |- data
     |- __keys__.json
```
**\_\_keys\_\_.json :**  

```JSON
{ "hello" : "world", "foo" : "bar" }
```

## script :

**index.php :**  

```php
<?php
require("Datas.php"); // version 1.1.0 ou +

Datas::setKey("PASSWORD", "hello", 83);

?>
```

## après :

```
folder
 |- Datas.php
 |- index.php
 |- data
     |- __keys__.json
```

**\_\_keys\_\_.json :**  

```JSON
{ "hello" : 83, "foo" : "bar" }
```
