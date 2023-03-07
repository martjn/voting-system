const yesValue = document.getElementById('yes_value')
const noValue = document.getElementById('no_value')

const yesDiv = document.getElementById('yes')
const noDiv = document.getElementById('no')

const ChangeResult = () => {
    let yes = parseInt(yesValue.innerHTML)
    let no = parseInt(noValue.innerHTML)
    let sum = yes + no

    console.log(yes, no, sum)

    let yesPercentage = yes * 100 / sum
    let noPercentage = 100 - yesPercentage

    yesDiv.style.width = yesPercentage + '%'
    noDiv.style.width = noPercentage + '%'


    console.log('Changed yesPercentage to ' + yesPercentage + '% and noPercentage to ' + noPercentage + '%')
}

ChangeResult()