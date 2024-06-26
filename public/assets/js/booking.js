var typeChoices = document.querySelectorAll('.typeChoice');

typeChoices.forEach(typeChoice => {
    typeChoice.addEventListener('click', () => {

        var hasCheckIcon = Array.from(typeChoice.children).some(child => {
            return child.classList.contains('fa-check');
        });

        if (!hasCheckIcon) {
            localStorage.setItem('idtype', typeChoice.id)
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
        }
        else{
            Array.from(typeChoice.children).some(child => {
                typeChoice.removeChild(child);
                typeChoice.removeAttribute('style');

            })
        }


    })
});

window.onload = () => {
    $('#ModalService').modal('show');


}


// var closeButton = document.querySelector('#closeButton');
// closeButton.addEventListener('click', ()=>{
//     $('#ModalService').modal('hide');
// })

var saveButton = document.querySelector('#saveButton');
var inputs = document.querySelectorAll('.Modal_input');
inputs.forEach(element => {
    element.addEventListener('click', () => {
        console.log('coucou');
    if (element.checked) {
        localStorage.setItem('reserve', element.value);
    }
})
});


