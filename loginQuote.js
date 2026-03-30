document.getElementById("signupForm").addEventListener("submit", function(e) {
    e.preventDefault(); // Prevent form submission

    // Retrieve form fields
    const firstName = document.getElementById("firstName").value.trim();
    const lastName = document.getElementById("lastName").value.trim();
    const phoneNumber = document.getElementById("phoneNumber").value.trim();
    const email = document.getElementById("email").value.trim();
    const dob = document.getElementById("dob").value;
    const healthQuestions = document.getElementById("healthQuestions").value.trim();

    // Basic validation
    if (firstName === "" || lastName === "" || phoneNumber === "" || email === "" || dob === "" || healthQuestions === "") {
        alert("Please fill in all fields.");
        return;
    }

    // Email validation
    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    if (!emailPattern.test(email)) {
        alert("Please enter a valid email address.");
        return;
    }

    // Phone number validation (basic, for example purposes)
    const phonePattern = /^[0-9]{10}$/;
    if (!phonePattern.test(phoneNumber)) {
        alert("Please enter a valid 10-digit phone number.");
        return;
    }

    // Success message
    alert("Signup successful!");

});
