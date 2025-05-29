
function switchTab(tabName) {
    document.querySelectorAll('.tab-btn').forEach(btn => {
        btn.classList.remove('active');
    });
    document.querySelectorAll('.form').forEach(form => {
        form.classList.remove('active');
    });

    document.querySelector(`.tab-btn[data-tab="${tabName}"]`).classList.add('active');
    document.getElementById(`${tabName}-form`).classList.add('active');
}

document.querySelectorAll('input').forEach(input => {
    input.addEventListener('input', (e) => {
        const errorSpan = e.target.nextElementSibling;
        if (e.target.value.trim() === '') {
            e.target.classList.add('error');
            errorSpan.textContent = 'Câmp obligatoriu';
            errorSpan.style.display = 'block';
        } else {
            e.target.classList.remove('error');
            errorSpan.style.display = 'none';
        }
    });
});

window.addEventListener('DOMContentLoaded', () => {
    const urlParams = new URLSearchParams(window.location.search);
    const error = urlParams.get('error');
    const success = urlParams.get('success');

    if (error) showMessage('error', decodeURIComponent(error));
    if (success) showMessage('success', decodeURIComponent(success));
});

function showMessage(type, text) {
    const msg = document.getElementById('message');
    msg.className = `message ${type}`;
    msg.textContent = text;
    msg.style.display = 'block';
    setTimeout(() => msg.style.display = 'none', 5000);
}
