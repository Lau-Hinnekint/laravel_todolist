import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


document.addEventLister('DOMContentLoaded', function() {
    document.getElementById('contactForm'), addEventListener('addContact', function(e) {
        e.preventDefault();

        let formData = new FormData(this);
        let csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        fetch("{{ route('contacts.create') }}", {
                method: 'GET',
                headers: {
                    'X-CSRF-TOKEN': csrfToken,
                    'Accept': 'application/json',
                },
                body: formData,
            })
            .then(response => response.json())
            .then(data => {
                if (data.errors) {
                    document.getElementById('errorMessage').innerHTML = '';
                    for (let field in data.errors) {
                        data.errors[field].forEach(error => {
                            let errorMessage = document.createElement('p');
                            errorMessage.innertext = error;
                            document.getElementById('errorMessage').appendChild(errorMessage);
                        });
                    }
                    document.getElementById('errorMessage').style.display = 'block';
                } else {
                    document.getElementById('contactForm').reset();
                    document.getElementById('succesMessage').style.display = 'block';
                    setTimeout(() => {
                        document.getElementById('succesMessage').style.display = 'none';
                    }, 3000);
                }
            })
            .catch(error => console.error('Error:', error));
    });
});