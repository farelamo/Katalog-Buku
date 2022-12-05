
// untuk manipulasi form login
const form = document.querySelector('.signupsignin');
const signup = document.querySelector('.create-account');
const login = document.querySelector('.login-account');
// sifnup login

signup.addEventListener("click", ()=>{
    form.classList.add('active');
})
login.addEventListener("click", ()=>{
    form.classList.remove('active');
})
