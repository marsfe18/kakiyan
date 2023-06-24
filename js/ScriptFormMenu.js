//Reservasi validation
// jshint esversion: 6
const form = document.getElementById('form');
const fname = document.getElementById('fname');
const email = document.getElementById('email');
const book = document.getElementById('book');
const person = document.getElementById('person');
const locate = document.getElementById('locate');
const time = document.getElementById('time');

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
    const fnameValue = fname.value.trim();
    const emailValue = email.value.trim();
    const bookValue = book.value.trim();
    const personValue = person.value.trim();
    const locateValue = locate.options[locate.selectedIndex].value;
    const timeValue = time.options[time.selectedIndex].value;

    if(fnameValue === '') {
        setError(fname, 'Full name is required!');
        return false;
    } else {
        setSuccess(fname);
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

    if(bookValue === '') {
        setError(book, 'Book date is required!');
        return false;
    } else {
        setSuccess(book);
    }

    if(locateValue=="0"){
        setError(locate, 'Branch Store is required!');
        return false;
    } else{
        setSuccess(locate);
    }

    if(timeValue=="0"){
        setError(time, 'Time booking is required!');
        return false;
    } else{
        setSuccess(time);
    }

    if(personValue === '') {
        setError(person, 'Number of person is required!');
        return false;
    } else if(personValue<0){
        setError(person, 'Amount person can\'t be negative!');
        return false;
    } else {
        setSuccess(person);
    }
};