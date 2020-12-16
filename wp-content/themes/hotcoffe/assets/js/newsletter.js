const newscontent     = document.getElementById('newsletter');
const newsregister    = document.getElementById('submit-newsletter');

function validateEmail(email) {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

if(newscontent) {
    newsregister.addEventListener('click', (event) => {
        if (!validateEmail(document.getElementById('input-newsletter').value)) {
            newscontent.classList.add('subscribe-error');
            event.preventDefault();
            return false;
        }
        
        newscontent.classList.remove('subscribe-error');
        newscontent.classList.add('subscribe-success');
        newscontent.innerHTML = '<h4 class="subscribe-ok">You are subscribe!</h4>'
    
        event.preventDefault();
    });
}