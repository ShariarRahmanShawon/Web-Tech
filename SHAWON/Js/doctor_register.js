
function formValidation() {
    if (checkDoctorRegistration()) {
        return true;
    } else {
        return false;
    }
}

function checkDoctorRegistration() {
    var name = document.getElementById("name").value.trim();
    var dob = document.getElementById("dob").value;
    var email = document.getElementById("email").value.trim();
    var phone = document.getElementById("phone").value.trim();
    var password = document.getElementById("password").value;
    var gender = document.querySelector('input[name="gender"]:checked');
    var specialization = document.getElementById("specialization").value;
    var license = document.getElementById("license").value.trim();
    var institution = document.getElementById("institution").value.trim();
    var designation = document.getElementById("designation").value;
    var languages = document.querySelectorAll('input[name="languages[]"]:checked');

    var valid = true;

    // Name
    if (name === "") {
        document.getElementById("nameError").innerHTML = "Please enter your full name.";
        valid = false;
    } else {
        document.getElementById("nameError").innerHTML = "";
    }

    // DOB
    if (dob === "") {
        document.getElementById("dobError").innerHTML = "Please enter your date of birth.";
        valid = false;
    } else {
        document.getElementById("dobError").innerHTML = "";
    }

    // Email
    if (email === "" || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        document.getElementById("emailError").innerHTML = "Please enter a valid email address.";
        valid = false;
    } else {
        document.getElementById("emailError").innerHTML = "";
    }

    // Phone
    if (phone === "" || !/^\d{10}$/.test(phone)) {
        document.getElementById("phoneError").innerHTML = "Please enter a valid 10-digit phone number.";
        valid = false;
    } else {
        document.getElementById("phoneError").innerHTML = "";
    }

    // Password
    if (password === "") {
        document.getElementById("passwordError").innerHTML = "Please enter a password.";
        valid = false;
    } else {
        document.getElementById("passwordError").innerHTML = "";
    }

    // Gender
    if (!gender) {
        document.getElementById("genderError").innerHTML = "Please select your gender.";
        valid = false;
    } else {
        document.getElementById("genderError").innerHTML = "";
    }

    // Specialization
    if (specialization === "") {
        document.getElementById("specializationError").innerHTML = "Please select your specialization.";
        valid = false;
    } else {
        document.getElementById("specializationError").innerHTML = "";
    }

    // License
    if (license === "") {
        document.getElementById("licenseError").innerHTML = "Please enter your license number.";
        valid = false;
    } else {
        document.getElementById("licenseError").innerHTML = "";
    }

    // Institution
    if (institution === "") {
        document.getElementById("institutionError").innerHTML = "Please enter your MBBS institution.";
        valid = false;
    } else {
        document.getElementById("institutionError").innerHTML = "";
    }

    // Designation
    if (designation === "") {
        document.getElementById("designationError").innerHTML = "Please select your designation.";
        valid = false;
    } else {
        document.getElementById("designationError").innerHTML = "";
    }

    // Languages
    if (languages.length === 0) {
        document.getElementById("languagesError").innerHTML = "Please select at least one language.";
        valid = false;
    } else {
        document.getElementById("languagesError").innerHTML = "";
    }

    return valid;
}
