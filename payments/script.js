function validatePaymentForm() {
    // Getting values using the ID
    var name = document.getElementById("customer_name").value;
    var email = document.getElementById("email").value;
    var card = document.getElementById("card_num").value;

    // Name validation
    if (name == "" || !name.includes(" ")) {
    alert("Please enter your full name (First and Last name).");
    return false;
}
    // 3. Email validation
    if (!email.includes("@")) {
        alert("Please enter a valid email address.");
        return false;
    }

    // 4. Card validation (Simple length check)
    if (card.length !== 16) {
        alert("Card Number must be exactly 16 digits");
        return false;
    }

    return true;
}