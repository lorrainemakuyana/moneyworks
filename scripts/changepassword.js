const password = document.getElementById('newPassword').value
const confirmPassword = document.getElementById('renewPassword').value

const changeButton = document.getElementById('changemypassword'); 
changeButton.onclick(event => {
    if (password !== confirmPassword) {
    alert("Your passwords must match to continue")
    }
})


