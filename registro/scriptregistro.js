let data = JSON.parse(localStorage.getItem("Account"));
const remember = localStorage.getItem("Remember");
let account;

if (data === null) {
  data = [];
}

// Show Card
const card = document.querySelectorAll("section");
function showCard(form) {
  card.forEach((element) => {
    if (element.className === form) {
      element.style.display = "";
    } else {
      element.style.display = "none";
    }
  });
}

if (remember === null) {
  showCard("signup-form");
} else {
  data.forEach((item) => {
    if (item["username"] === remember) {
      account = item;
    }
  });
  toWelcome();
}

// se inscrever ->
const regUsername = document.getElementById("username");
const regEmail = document.getElementById("email");
const regPassword = document.getElementById("reg_password");
const regPasswordConfirm = document.getElementById("conreg_password");
const regCheck = document.getElementById("reg_check");
const regButton = document.getElementById("signup_submit");

// checar username para ver se tá correto com os caracteres essenciais
const usernameErrorDisplay = document.getElementById("username_error");
const usernameRegEx = /^[A-Za-z0-9_.]{0,25}$/;
let rUchk,
  rUchka,
  rUchks = true;

regUsername.addEventListener("input", () => {
  if (!regUsername.value.match(usernameRegEx)) {
    showError(
      regUsername,
      usernameErrorDisplay,
      "Use apenas letras, números, _ e . no nome de usuário."
    );
    rUchka = false;
  } else {
    hideError(regUsername, usernameErrorDisplay);
    rUchka = true;
  }
});

function checkSameUsername() {
  if (data !== [] && data !== null) {
    data.forEach((item) => {
      if (item["username"] === regUsername.value) {
        rUchks = false;
      }
    });
  }
}

function checkUsername() {
  checkSameUsername();
  if (regUsername.value === "") {
    showError(regUsername, usernameErrorDisplay, "Nome de usuário não pode estar vazio.");
    rUchk = false;
  } else if (!rUchks && rUchka) {
    showError(
      regUsername,
      usernameErrorDisplay,
      "Esse nome de usuário já está em uso."
    );
    rUchk = true;
  } else if (!rUchka) {
    rUchk = false;
  } else {
    hideError(regUsername, usernameErrorDisplay);
    rUchk = true;
  }
}

// conferir se o e-mail está certo
const emailErrorDisplay = document.getElementById("email_error");
const emailRegEx = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
let rEchk,
  rEchks = true;

function checkSameEmail() {
  if (data !== []) {
    data.forEach((item) => {
      if (item["email"] === regEmail.value) {
        rEchks = false;
      }
    });
  }
}

function checkEmail() {
  checkSameEmail();
  if (regEmail.value === "") {
    showError(regEmail, emailErrorDisplay, "Email não pode estar vazio.");
    rEchk = false;
  } else if (!regEmail.value.match(emailRegEx)) {
    showError(regEmail, emailErrorDisplay, "Email inválido.");
    rEchk = false;
  } else if (!rEchks) {
    showError(
      regEmail,
      emailErrorDisplay,
      "esse email já existe."
    );
  } else {
    hideError(regEmail, emailErrorDisplay);
    rEchk = true;
  }
}

// Checar senha
const passwordErrorDisplay = document.getElementById("reg_password_error");
let rPchk = true;

function checkPassword() {
  if (regPassword.value === "") {
    showError(regPassword, passwordErrorDisplay, "A senha não pode estar em branco.");
    rPchk = false;
  } else {
    hideError(regPassword, passwordErrorDisplay);
    rPchk = true;
  }
}

// Checar confirmação da senha
const regPasswordConfirmErrorDisplay = document.getElementById(
  "conreg_password_error"
);
let rPCchka,
  rPCchk = true;

regPasswordConfirm.addEventListener("change", () => {
  if (regPasswordConfirm.value !== regPassword.value) {
    showError(
      regPasswordConfirm,
      regPasswordConfirmErrorDisplay,
      "As senhas não condizem."
    );
    rPCchka = false;
  } else {
    hideError(regPasswordConfirm, regPasswordConfirmErrorDisplay);
    rPCchka = true;
  }
});

function checkPasswordConfirm() {
  if (regPasswordConfirm.value === "") {
    showError(
      regPasswordConfirm,
      regPasswordConfirmErrorDisplay,
      "Senhas não podem estar vazias."
    );
    rPCchk = false;
  } else if (!rPCchka) {
    rPCchk = false;
  } else {
    rPCchk = true;
    hideError(regPasswordConfirm, regPasswordConfirmErrorDisplay);
  }
}

// Checkbox
regCheck.addEventListener("click", () => {
  if (regCheck.checked === true) {
    regButton.disabled = false;
  } else {
    regButton.disabled = true;
  }
});

// Salvar Data
function saveData() {
  if (rUchk && rEchk && rPchk && rPCchk) {
    let newAccount = {
      username: regUsername.value,
      email: regEmail.value,
      password: regPassword.value,
    };
    data.push(newAccount);
    localStorage.setItem("Account", JSON.stringify(data));
    clearSignup();
    showCard("login-form");
  } else {
    regPassword.value = "";
    regPasswordConfirm.value = "";
  }
}

// botão de se inscrever
regButton.addEventListener("click", async () => {
  await checkUsername();
  await checkEmail();
  await checkPassword();
  await checkPasswordConfirm();
  await saveData();
});

// Criar clique
const toLoginButton = document.getElementById("to_login");
toLoginButton.addEventListener("click", () => {
  showCard("login-form");
  clearSignup();
});

// Sign Up Click
regButton.addEventListener("click", async () => {
  await checkUsername();
  await checkEmail();
  await checkPassword();
  await checkPasswordConfirm();
  await saveData();
});

// enviar Click
const changeSubmitButton = document.getElementById("change_submit");
changeSubmitButton.addEventListener("click", async () => {
  await checkCurrentPassword();
  await checkPassword();
  await checkPasswordConfirm();
  await saveChange();
});

// limpar pagiina de cadastro
function clearSignup() {
  regUsername.value = "";
  hideError(regUsername, usernameErrorDisplay);
  regEmail.value = "";
  hideError(regEmail, emailErrorDisplay);
  regPassword.value = "";
  hideError(regPassword, passwordErrorDisplay);
  regPasswordConfirm.value = "";
  hideError(regPasswordConfirm, regPasswordConfirmErrorDisplay);
  regCheck.checked = false;
}