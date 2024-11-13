function navigateTo(pageId) {
    document.querySelectorAll('.page').forEach(page => {
        page.style.display = 'none';
    });
    document.getElementById(pageId).style.display = 'block';
}

function validateSignUpForm() {
    const position = document.getElementById('position').value;
    const fullName = document.getElementById('fullName').value.trim();
    const password = document.getElementById('password').value.trim();
    const schoolId = document.getElementById('schoolId').value.trim();

    if (position && fullName && password && schoolId) {
        alert("Account created successfully!");
        navigateTo('signInPage');
        return false;
    } else {
        alert("Please fill in all fields.");
        return false;
    }
}

function validateSignInForm() {
    const password = document.getElementById('signInPassword').value.trim();
    const schoolId = document.getElementById('signInSchoolId').value.trim();

    if (password && schoolId) {
        alert("Logged in successfully!");
        window.location.href = "Pages/Homepage.html";
        return false;
    } else {
        alert("Please fill in both fields.");
        return false;
    }
}
