const editUserBtn = document.querySelectorAll('[data-edit-button]')
const idField = document.querySelectorAll('#id')
const fnameField = document.querySelectorAll('#fname')
const mnameField = document.querySelectorAll('#mname')
const lnameField = document.querySelectorAll('#lname')
const addressField = document.querySelectorAll('#address')
const contactField = document.querySelectorAll('#contact')
const departmentField = document.querySelectorAll('#department')
const divisionField = document.querySelectorAll('#division')
const statusField = document.querySelectorAll('#status')
const emailField = document.querySelectorAll('#email')
const typeField = document.querySelectorAll('#type')

editUserBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    let id = btn.getAttribute('data-id')
    let fname = btn.getAttribute('data-fname')
    let mname = btn.getAttribute('data-mname')
    let lname = btn.getAttribute('data-lname')
    let address = btn.getAttribute('data-address')
    let contact = btn.getAttribute('data-contact')
    let department = btn.getAttribute('data-department')
    let division = btn.getAttribute('data-division')
    let status = btn.getAttribute('data-status')
    let email = btn.getAttribute('data-email')
    let type = btn.getAttribute('data-type')

    idField[0].value = id
    fnameField[0].value = fname
    mnameField[0].value = mname
    lnameField[0].value = lname
    addressField[0].value = address
    contactField[0].value = contact
    departmentField[0].value = department
    divisionField[0].value = division
    statusField[0].value = status
    emailField[0].value = email
    typeField[0].value = type
  })
})
