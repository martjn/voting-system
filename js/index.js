const yesValue = document.getElementById('yes_value')
const noValue = document.getElementById('no_value')

const yesDiv = document.getElementById('yes')
const noDiv = document.getElementById('no')

const voteTime = document.getElementById("vote_time")

// Get the modal
const modal = document.getElementById('id01');

const ChangeResult = () => {

    let yes = parseInt(yesValue.innerHTML)
    let no = parseInt(noValue.innerHTML)
    let sum = yes + no

    let yesPercentage = yes * 100 / sum
    let noPercentage = 100 - yesPercentage

    yesDiv.style.width = yesPercentage + '%'
    noDiv.style.width = noPercentage + '%'
}

const CheckTime = () => {
    let startTime = new Date(voteTime.innerHTML)
    let endTime = new Date(startTime)
    endTime.setMinutes(startTime.getMinutes() + 5)

    voteTime.innerHTML = "Hääletuse vahemik: " + startTime.getHours() + "." + startTime.getMinutes() + " - " + endTime.getHours() + "." + endTime.getMinutes()
}

const ReloadPage = () => {
    window.location.reload()
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
    if (event.target === modal) {
        modal.style.display = "none";
    }
}

CheckTime()
ChangeResult()
setTimeout(ReloadPage, 5000)
