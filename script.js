function switchTab(tabName) {
    document.getElementById('login-form').classList.remove('active');
    document.getElementById('register-form').classList.remove('active');
    document.getElementById(`${tabName}-form`).classList.add('active');
}
