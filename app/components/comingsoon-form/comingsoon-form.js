import axios from '../../src/axios';

const form = document.querySelector('.js-comingsoon-form');

if (form) {
  const inputWrapper = form.querySelector('.js-comingsoon-email-input-wrapper');
  const input = form.querySelector('.js-comingsoon-email-input');

  if (inputWrapper && input) {
    form.addEventListener('submit', e => {
      e.preventDefault();

      const isValid = !inputWrapper.classList.contains('alert-validate');
  
      if (isValid) {

        sendEmail(input.value);

      }
    });
  }
}

const sendEmail = async (email) => {
  try {
    const response = await axios
      .get(`/main/subscribe?email=${email}`);

    const res = response.data;

    console.log(res);
  } catch (errors) {
    console.error(errors);
  }
}