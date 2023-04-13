
// /users.php
const base_url = "http://localhost/corso_php_mysql_tss-master/form_in_php/rest_api/"

export function getUser() {
   
      // promessa json
    return fetch(base_url+"/users.php").then((response) => response.json()) 

}