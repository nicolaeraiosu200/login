function switchTab(tabName) {
    document.querySelectorAll('.tab-btn').forEach(btn => {
        btn.classList.remove('active');
    });
    document.querySelectorAll('.form').forEach(form => {
        form.classList.remove('active');
    });

    document.querySelector(`.tab-btn[data-tab="${tabName}"]`).classList.add('active');
    document.getElementById(`${tabName}-form`).classList.add('active');

    document.getElementById(`${tabName}-form`).style.opacity = 0;
    setTimeout(() => {
        document.getElementById(`${tabName}-form`).style.opacity = 1;
    }, 10);
}
