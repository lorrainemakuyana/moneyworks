const password = document.getElementById('password').value
const confirmPassword = document.getElementById('yourConfirmPassword').value

const registerButton = document.getElementById('register-btn'); 
registerButton.onclick(event => {
    if (password !== confirmPassword) {
    alert("Your passwords must match to continue")
    }
})


