const form = document.querySelector('form');

const nameInput = document.querySelector('input[type="text"]');
const phoneInput = document.querySelector('input[type="tel"]');

const problemSelect = document.querySelectorAll('select')[0];
const levelSelect = document.querySelectorAll('select')[1];

const livePreview = document.getElementById('live_preview');

function updatePreview(){

    livePreview.innerHTML = `
        <h2>Live Preview</h2>

        <p><strong>Name:</strong> ${nameInput.value}</p>

        <p><strong>Telephone:</strong> ${phoneInput.value}</p>

        <p><strong>Problem:</strong> ${problemSelect.value}</p>

        <p><strong>Level:</strong> ${levelSelect.value}</p>
    `;
}

nameInput.addEventListener('input', updatePreview);
phoneInput.addEventListener('input', updatePreview);
problemSelect.addEventListener('change', updatePreview);
levelSelect.addEventListener('change', updatePreview);

form.addEventListener('submit', function(event){

    const phonePattern = /^\+250\d{9}$/;

    if(nameInput.value.trim() === ''){
        alert('Name is required');
        event.preventDefault();
        return;
    }

    if(!phonePattern.test(phoneInput.value.trim())){
        alert('Phone number must be in this format: +2507xxxxxxxx');
        event.preventDefault();
        return;
    }

    if(problemSelect.value === 'select problem'){
        alert('Please select a problem');
        event.preventDefault();
        return;
    }

    if(levelSelect.value === 'select level'){
        alert('Please select level');
        event.preventDefault();
        return;
    }

});
