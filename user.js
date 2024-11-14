
function handleUserSelect(value) {
    if (value === "Sign-Up") {
        window.location.href = "login.php"; // Replace with the actual login page URL
    } else if (value === "Sign-In") {
        window.location.href = "login.php"; // Replace with the actual sign-in page URL
    } else if (value === "welcome") {
        alert("Welcome to Luxlife!"); // Display a message or perform another action
    }
}
document.getElementById("srbtn").addEventListener("click", function() {
    const dataDiv = document.getElementById("search-form");
    if (dataDiv.style.display === "none") {
        dataDiv.style.display = "block";
    } else {
        dataDiv.style.display = "none";
    }
});
 // Retrieve the username from localStorage
 const email = localStorage.getItem("email");
    
 if (email) {
     // Show alert with username
     alert("Welcome to Luxlife, " + email+ "! You have successfully signed in.");
     
     // Clear the username from localStorage if you only need it once
     localStorage.removeItem("email");
 }zz