var typeChoices = document.querySelectorAll('.typeChoice');

typeChoices.forEach(typeChoice => {
    typeChoice.addEventListener('click', () => {
        console.log('type clicked');
        typeChoice.style.position = 'absolute';
        typeChoice.style.width = '100%';
        typeChoice.style.height = '100%';
        typeChoice.style.top = '0';
        typeChoice.style.left = '0';
        typeChoice.style.background = 'rgba(212, 167, 98, 0.7)';
        typeChoice.style.borderRadius = '8px';
        typeChoice.style.opacity = '1';
        typeChoice.style.zIndex = '1';

        var checkIcon = document.createElement('i');
        checkIcon.classList.add('fas', 'fa-check', 'text-white', 'fa-2x');
        checkIcon.style.fontSize = '6rem';
        typeChoice.style.textAlign = 'center'; 
        checkIcon.style.marginTop = '4rem'; 
        typeChoice.appendChild(checkIcon);

        var bookingForm = document.getElementById('bookingForm');
        bookingForm.classList.add('animate__animated', 'animate__bounceInUp');
        bookingForm.hidden =false;
    })
});
