function UsersList(array_users,element_selector) {

    const lista = document.getElementById(element_selector)
    const elenco = array_users.map((user)=>{
        return "<li>("+user.user_id+") "+user.first_name+" "+user.last_name+"</li>"
    }).join("\n")

    lista.innerHTML = elenco
    // console.log(elenco)
}

const UserTable = (array_users,element_selector) => {
    // Template literals - are literals delimited with backtick (`) characters, allowing for multi-line strings, string interpolation with embedded expressions, and special constructs called tagged templates.
   const tr_users = array_users.map((user) => {
        return `<tr>
                    <td>
                        ${user.first_name}
                    </td>
                </tr>`
        }).join("")

    const html = `<table border=1px width=50%>
                    <tr>
                        <th>
                            Nome
                        </th>
                    </tr>
                    ${tr_users}
                </table>` 
            
    document.getElementById(element_selector).innerHTML = html

}

export { UsersList, UserTable }