import axios from '../../src/axios';

const form = document.querySelector('.js-comingsoon-form');

if (form) {
  const inputWrapper = form.querySelector('.js-comingsoon-email-input-wrapper');
  const input = form.querySelector('.js-comingsoon-email-input');
  const errorMessageWrapper = form.querySelector('.js-error-message');
  const successMessageWrapper = form.querySelector('.js-success-message');

  if (inputWrapper && input && errorMessageWrapper) {
    form.addEventListener('submit', e => {
      e.preventDefault();

      const isValid = !inputWrapper.classList.contains('alert-validate');
      const isLoading = form.classList.contains('is-loading');
  
      if (isValid && !isLoading) {

        sendEmail(input.value, successMessageWrapper, errorMessageWrapper);

      }
    });
  }
}

const sendEmail = async (email, successMessageWrapper, errorMessageWrapper) => {
  try {
    form.classList.add('is-loading');
    form.classList.remove('is-error');
    form.classList.remove('is-success');

    const response = await axios
      .post(`/main/subscribe`, {
        email
      });

    const res = response;
    const message = res.data.message ?? 'Success';

    setTimeout(() => {
      form.classList.add('is-success');
      successMessageWrapper.innerHTML = message;
    }, 600);
    
  } catch (errors) {
    const res = errors.response;
    const message = res.data.message ?? 'Some error';
    
    setTimeout(() => {
      form.classList.add('is-error');
      errorMessageWrapper.innerHTML = message;
    }, 600);
  } finally {

    setTimeout(() => {
      form.classList.remove('is-loading');
    }, 600);
  }
}