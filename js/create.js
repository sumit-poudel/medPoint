const password = document.getElementById("password");
const passwordBox = document.getElementById("passwordBox");
const confirmpassword = document.getElementById("confirmpassword");
const confirmpasswordBox = document.getElementById("confirmpasswordBox");
const submit = document.getElementById("submit");
let timeout;

const disableSubmit = () => {
    submit.disabled = true;
    submit.classList.add("bg-blue-100");
    submit.classList.remove("bg-blue-500");
};

const enableSubmit = () => {
    submit.disabled = false;
    submit.classList.remove("bg-blue-100");
    submit.classList.add("bg-blue-500");
};

const passwordCheck = () => {
    if (password.value !== confirmpassword.value) {
        passwordBox.classList.add("border-red-500");
        confirmpasswordBox.classList.add("border-red-500");
        return false;
    } else {
        passwordBox.classList.remove("border-red-500");
        confirmpasswordBox.classList.remove("border-red-500");
        return true;
    }
};

const checkPasswords = () => {
    clearTimeout(timeout);
    timeout = setTimeout(() => {
        if (password.value.length > 0 && confirmpassword.value.length > 0) {
            if (!passwordCheck()) disableSubmit();
            else enableSubmit();
        } else {
            enableSubmit();
            passwordBox.classList.remove("border-red-500");
            confirmpasswordBox.classList.remove("border-red-500");
        }
    }, 500);
};

password.addEventListener("input", checkPasswords);
confirmpassword.addEventListener("input", checkPasswords);
