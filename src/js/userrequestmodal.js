const approveRequestBtn = document.querySelectorAll('[data-approve-button]')
const rejectRequestBtn = document.querySelectorAll('[data-reject-button]')
const closeRequestBtn = document.querySelectorAll('[data-close-button]')

const approveRequestModal = document.querySelector('#approverequestmodal')
const rejectRequestModal = document.querySelector('#rejectrequestmodal')

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

    approveRequestModal.classList.remove('hidden')
    approveRequestModal.classList.add('flex')
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

    rejectRequestModal.classList.remove('hidden')
    rejectRequestModal.classList.add('flex')
  })
})

closeRequestBtn.forEach((btn) => {
  btn.addEventListener('click', () => {
    approveRequestModal.classList.add('hidden')
    approveRequestModal.classList.remove('flex')
    rejectRequestModal.classList.add('hidden')
    rejectRequestModal.classList.remove('flex')
  })
})

approveRequestModal.classList.add('hidden')
approveRequestModal.classList.remove('flex')
rejectRequestModal.classList.add('hidden')
rejectRequestModal.classList.remove('flex')
