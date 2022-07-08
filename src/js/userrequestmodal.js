const approveRequestBtn = document.querySelectorAll('[data-approve-button]')
const rejectRequestBtn = document.querySelectorAll('[data-reject-button]')

const idField = document.querySelectorAll('#id')
const useridField = document.querySelectorAll('#userid')
const cipointsField = document.querySelectorAll('#cipoints')
const yearField = document.querySelectorAll('#year')
const semesterField = document.querySelectorAll('#semester')

approveRequestBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    let id = btn.getAttribute('data-id')
    let userid = btn.getAttribute('data-userid')
    let cipoints = btn.getAttribute('data-cipoints')
    let year = btn.getAttribute('data-year')
    let semester = btn.getAttribute('data-semester')

    idField[0].value = id
    useridField[0].value = userid
    cipointsField[0].value = cipoints
    yearField[0].value = year
    semesterField[0].value = semester
  })
})

rejectRequestBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    let id = btn.getAttribute('data-id')
    let userid = btn.getAttribute('data-userid')
    let cipoints = btn.getAttribute('data-cipoints')
    let year = btn.getAttribute('data-year')
    let semester = btn.getAttribute('data-semester')

    idField[1].value = id
    useridField[1].value = userid
    cipointsField[1].value = cipoints
    yearField[1].value = year
    semesterField[1].value = semester
  })
})
