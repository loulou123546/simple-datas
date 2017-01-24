# Bienvenue sur le Wiki de Simple Datas  

### Simple Datas est actuellement en version `0.3_dev`  
### La documentation quant à elle correspond à la `1.0.0`  

---

# L'API  

### utilisation  

Créer une DataBase : `Datas::new_DB($password, $database)`  

Supprimer une DB : `Datas::delete_DB($password, $database)`  

---

Modifier toute la DB : `Datas::set_ALL($password, $database, $value, $isJSON = false)`  

Récupérer toute la DB : `Datas::get_ALL($password, $database)`

---

Modifier tout `DATA` : `Datas::set_DATA($password, $database, $value, $isJSON = false)`  

Récupérer tout `DATA` : `Datas::get_DATA($password, $database)`  

---

Modifier les INFO : `Datas::set_INFO($password, $database, $version, $lastchange)`  

Récupérer les INFO: `Datas::get_INFO($password, $database)`  

---

Ajouter un ITEM : `Datas::add_ITEM($password, $database, $value, $isJSON = false)`  

Récupérer un ITEM : `Datas::get_ITEM($password, $database, $ID)`  

Modifier un ITEM : `Datas::set_ITEM($password, $database, $ID, $value, $isJSON = false)`  

Supprimer un ITEM : `Datas::delete_ITEM($password, $database, $ID)`  

---

Trouver les IDs correspondant : `Datas::find_ID($password, $database, $search)`  

Trouver les ITEMs correspondant : `Datas::find_ITEM($password, $database, $search)`  
