
function editar(id, nome_u, email_u){

    //create form
    let form = document.createElement('form')
    form.className = 'form-group grid grid-template-columns'
    form.action = "/edituser_db"
    form.method = 'post'

    //create input for text entering
    let inputName = document.createElement('input')
    inputName.type = 'text'
    inputName.name = 'nome'
    inputName.className = 'form-control bg-light item'
    inputName.value = nome_u

    let inputEmail = document.createElement('input')
    inputEmail.type = 'email'
    inputEmail.name = 'email'
    inputEmail.className = 'form-control bg-light item'
    inputEmail.value = email_u

    //create button to submit the form
    let button = document.createElement('button')
    button.type = 'submit'
    button.className = 'btn btn-success item'
    button.innerHTML = 'Atualizar'

    //Hierarchy
    form.appendChild(inputName)
    form.appendChild(inputEmail)
    form.appendChild(button)

    //selecting div
    let name = document.getElementById('nome_'+id)
    let email = document.getElementById('email_'+id)

    //clean register informations
    email.innerHTML = ''
    name.innerHTML = ''

    //include form on the browser
    email.insertBefore(form, email[0])
    name.insertBefore(form, name[0])
}