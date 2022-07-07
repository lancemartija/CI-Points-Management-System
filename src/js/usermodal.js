const viewUserBtn = document.querySelectorAll('[data-view-button]')
const editUserBtn = document.querySelectorAll('[data-edit-button]')
const deleteUserBtn = document.querySelectorAll('[data-delete-button]')

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

viewUserBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
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
    fnameField[1].value = fname
    mnameField[1].value = mname
    lnameField[1].value = lname
    addressField[1].value = address
    contactField[1].value = contact
    departmentField[1].value = department
    divisionField[1].value = division
    statusField[1].value = status
    emailField[1].value = email
    typeField[1].value = type
  })
})

deleteUserBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    let id = btn.getAttribute('data-id')

    idField[1].value = id
  })
})
