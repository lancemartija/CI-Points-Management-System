const approveCIPRequestBtn = document.querySelectorAll('[data-approve-button]')
const rejectCIPRequestBtn = document.querySelectorAll('[data-reject-button]')
const closeCIPRequestBtn = document.querySelectorAll('[data-close-button]')

const approveCIPRequestModal = document.querySelector('#approvecipmodal')
const rejectCIPRequestModal = document.querySelector('#rejectcipmodal')

const idField = document.querySelectorAll('#id')
const useridField = document.querySelectorAll('#userid')
const cipointsField = document.querySelectorAll('#cipoints')
const yearField = document.querySelectorAll('#year')
const semesterField = document.querySelectorAll('#semester')

approveCIPRequestBtn.forEach((btn) => {
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

    approveCIPRequestModal.classList.remove('hidden')
    approveCIPRequestModal.classList.add('flex')
  })
})

rejectCIPRequestBtn.forEach((btn) => {
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

    rejectCIPRequestModal.classList.remove('hidden')
    rejectCIPRequestModal.classList.add('flex')
  })
})

closeCIPRequestBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    approveCIPRequestModal.classList.add('hidden')
    approveCIPRequestModal.classList.remove('flex')
    rejectCIPRequestModal.classList.add('hidden')
    rejectCIPRequestModal.classList.remove('flex')
  })
})

approveCIPRequestModal.classList.add('hidden')
approveCIPRequestModal.classList.remove('flex')
rejectCIPRequestModal.classList.add('hidden')
rejectCIPRequestModal.classList.remove('flex')
