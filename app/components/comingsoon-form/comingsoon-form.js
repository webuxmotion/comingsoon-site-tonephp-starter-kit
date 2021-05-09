import axios from '../../src/axios';

const form = document.querySelector('.js-comingsoon-form');

if (form) {
  const inputWrapper = form.querySelector('.js-comingsoon-email-input-wrapper');
  const input = form.querySelector('.js-comingsoon-email-input');

  if (inputWrapper && input) {
    form.addEventListener('submit', e => {
      e.preventDefault();

      const isValid = !inputWrapper.classList.contains('alert-validate');
      const isLoading = form.classList.contains('is-loading');
  
      if (isValid && !isLoading) {

        sendEmail(input.value);

      }
    });
  }
}

const sendEmail = async (email) => {
  try {
    form.classList.add('is-loading');

    const response = await axios
      .get(`/main/subscribe?email=${email}`);

    const res = response.data;

    setTimeout(() => {
      form.classList.remove('is-loading');
    }, 600);
  } catch (errors) {
    console.error(errors);
  }
}