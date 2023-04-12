// require
import { getUser } from "./UserService.js";
import { UsersList, UserTable } from "./RenderView.js";

getUser()
.then(json => {

    UsersList(json,'lista_utenti_1')
})

const user_locale = [
    {
        "user_id": 1,
        "first_name": "Mario",
        "last_name": "Rossi",
        "birthday": "2020-04-17",
        "birth_city": "Torino",
        "regione_id": 15,
        "provincia_id": 15,
        "gender": "M",
        "username": "@b.itdfdfsg",
        "password": "segretissimo"
      },
      {
        "user_id": 2,
        "first_name": "Luigi",
        "last_name": "Verdi",
        "birthday": "2017-03-17",
        "birth_city": "Torino",
        "regione_id": 16,
        "provincia_id": 15,
        "gender": "M",
        "username": "giuseppe@xcvxc",
        "password": "a3ea3259dd51c5d28ac011a8dbf78e79"
      }
]


UserTable(user_locale, 'lista_utenti_2')