//Testimoni validation
// jshint esversion: 6
const form = document.getElementById('form');
const nama = document.getElementById('nama');
const email = document.getElementById('email');
const locate = document.getElementById('locate');
const subjek = document.getElementById('subjek');
const review = document.getElementById('review');

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success');
};

const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};

const isValidEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
};

const validateInputs = () => {
    const namaValue = nama.value.trim();
    const emailValue = email.value.trim();
    const strUser = locate.options[locate.selectedIndex].value;
    const subjekValue = subjek.value.trim();
    const reviewValue = review.value.trim();

    if(namaValue === '') {
        setError(nama, 'Name is required!');
        return false;
    } else {
        setSuccess(nama);
    }

    if(emailValue === '') {
        setError(email, 'Email is required');
        return false;
    } else if (!isValidEmail(emailValue)) {
        setError(email, 'Provide a valid email address');
        return false;
    } else {
        setSuccess(email);
    }

    if(strUser==0){
        setError(locate, 'Location is required');
        return false;
    } else{
        setSuccess(locate);
    }

    if(subjekValue === '') {
        setError(subjek, 'Subject Topic is required');
        return false;
    } else {
        setSuccess(subjek);
    }

    if(reviewValue === '') {
        setError(review, 'Review is required');
        return false;
    } else {
        setSuccess(review);
    } 
};