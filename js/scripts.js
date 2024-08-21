/*!
* Start Bootstrap - Landing Page v6.0.6 (https://startbootstrap.com/theme/landing-page)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-landing-page/blob/master/LICENSE)
*/
// This file is intentionally blank
// Use this file to add JavaScript to your project


    document.querySelector('#miform').addEventListener('submit', function(e) {
        e.preventDefault();
        const formData = new FormData(this);

        // Realiza una solicitud AJAX (por ejemplo, con Fetch o XMLHttpRequest) para enviar los datos al servidor PHP.
        fetch('users-profile.php', {
          method: 'POST',
          body: formData
        })
        
        .then(response => response.json())
        .then(data => {
              // Actualiza los campos del perfil del usuario con los nuevos datos de 'data'
          });
    });

    header('Cache-Control: no-cache, no-store, must-revalidate');
    header ('Pragma: no-cache');
    header('Expires: 0');
    window.location.reload(true);

    document.getElementById('full_name').innerHTML = data.full_name;
    document.getElementById('Email').innerHTML = data.Email;
    document.getElementById('username').innerHTML = data.username;
    document.getElementById('password').innerHTML = data.password;
   