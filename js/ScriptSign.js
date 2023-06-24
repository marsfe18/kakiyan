//login, register validation
// jshint esversion: 6
const form = document.getElementById('form');
const email = document.getElementById('email');
const password = document.getElementById('password');
const fname = document.getElementById('fname');
const uname = document.getElementById('uname');
const phone = document.getElementById('phone');
const birth = document.getElementById('birth');

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

const isValidPhone = phone =>{
    const ph = /^\d{6,20}$/;
    return ph.test(String (phone).toLowerCase());
};

const validateInputs = () => {
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    const fnameValue = fname.value.trim();
    const unameValue = uname.value.trim();
    const phoneValue = phone.value.trim();
    const birthValue = birth.value.trim();

    if(fnameValue === '') {
        setError(fname, 'Full name is required');
        return false;
    } else {
        setSuccess(fname);
    }

    if(unameValue === '') {
        setError(uname, 'User name is required');
        return false;
    }else if (unameValue.length < 10) {
        setError(uname, 'Username should contain more than 10 character.');
        return false;
    } else {
        setSuccess(uname);
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

    if(passwordValue === '') {
        setError(password, 'Password is required');
        return false;
    } else if (passwordValue.length < 8 ) {
        setError(password, 'Password must be at least 8 character.');
        return false;
    } else {
        setSuccess(password);
    }

    if(phoneValue === '') {
        setError(phone, 'Phone Number is required');
        return false;
    } else if (!isValidPhone(phoneValue)) {
        setError(phone, 'Provide a valid phone number. Should at least contain 6-20 digit.');
        return false;
    } else {
        setSuccess(phone);
    }

    if(birthValue === '') {
        setError(birth, 'Birth date is required');
        return false;
    } else {
        setSuccess(birth);
    }
};


