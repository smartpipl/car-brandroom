document.getElementById("contact-form").addEventListener("submit", function (event) {
  event.preventDefault();
  let isValid = true;

  const nameField = document.getElementById("name");
  const phoneField = document.getElementById("phone");
  const emailField = document.getElementById("email");
  const requestIdField = document.getElementById("request-type");
  const requestTypeField = document.getElementById("request-value");
  const messageField = document.getElementById("request");

  const validateFields = () => {
    nameField.classList.remove("error");
    phoneField.classList.remove("error");
    emailField.classList.remove("error");
    requestTypeField.classList.remove("error");
    messageField.classList.remove("error");
    requestIdField.classList.remove("error");


    if (!nameField.value.trim()) {
      isValid = false;
      nameField.classList.add("error");
    }

    if (!phoneField.value.trim()) {
      isValid = false;
      phoneField.classList.add("error");
    } else if (!/^\+?[0-9]{7,15}$/.test(phoneField.value.trim())) {
      isValid = false;
      phoneField.classList.add("error");
    }

    if (!emailField.value.trim()) {
      isValid = false;
      emailField.classList.add("error");
    } else if (!/\S+@\S+\.\S+/.test(emailField.value.trim())) {
      isValid = false;
      emailField.classList.add("error");
    }

    if (!requestTypeField.value) {
      isValid = false;
      requestTypeField.classList.add("error");
      requestIdField.classList.add("error");

    }

    if (!messageField.value.trim()) {
      isValid = false;
      messageField.classList.add("error");
    }

    return isValid;
  };

  if (validateFields()) {
    // alert("The form is successfully sent!");
    this.submit();
  }

  [nameField, phoneField, emailField, requestTypeField, requestIdField, messageField].forEach(field => {
    field.addEventListener('input', () => {
      validateFields();
    });
  });
});



