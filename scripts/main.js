const validations = {
    /**
    * @name isLoginValid
    * @description checks if the login form is correctly filled with data
    * @returns {array} empty if no errors
    */
    isLoginValid: (formData) => {
    
        let errors = {};
        if (!formData.email) {
            errors.email = 'Please add email';
        }

        if (!formData.password) {
            errors.password = 'Please enter your password';
        }
        
        return errors;
   },
   showLoginErrors: (errors) => {
    
    validations.clearErrors();
    
    for (let inputName in errors) {
        const errorEl = document.createElement('span');
        errorEl.textContent = errors[inputName];
        errorEl.classList.add('error-message');
        const inputWrapper = document.querySelector(`input[name="${inputName}"]`).parentElement;
        
        inputWrapper.appendChild(errorEl);
    }
   
    
   },
   
   clearErrors: () => {
        document.querySelectorAll('form .error-message').forEach(errorEl => {
           errorEl.parentElement.removeChild(errorEl);
        });
   },
   registrationForm: () => {
      console.log(2);
   },
};

const listeners = {
    loginSubmitted: event => {
        event.preventDefault();
    
        const formData = {
            email: document.querySelector('input[name="email"]').value,
            password: document.querySelector('input[name="password"]').value,
        };
        
        let loginErros = validations.isLoginValid(formData);
    
        if (Object.keys(loginErros).length) {
            validations.showLoginErrors(loginErros);
        }
        
        let myHeaders = new Headers();
        // myHeaders.append('Accept', 'application/json');
        myHeaders.append('Content-Type', 'application/x-www-form-urlencoded');
        
        let body = new FormData();
        body.append('username', 'Chris');
        
        fetch(document.querySelector('#login_form').action, { method: 'post', headers: myHeaders, body: body })
            .then(response => response.json())
            .then(result => console.log(result));
    }
};

window.onload = () => {
    document.querySelector('#login_form').addEventListener('submit', listeners.loginSubmitted);
};
