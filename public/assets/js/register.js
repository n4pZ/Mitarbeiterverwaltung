const registerUser = async () => {
  const email = document.getElementById("register_email").value;
  const password = document.getElementById("register_password").value;
  const password_repeat = document.getElementById(
    "register_password_repeat"
  ).value;

  if (password !== password_repeat) {
    return alert("Passwoerter muessen uebereinstimmen!");
  } else if (
    password.trim() === "" ||
    password_repeat.trim() === "" ||
    email.trim() === ""
  ) {
    return alert("Alle Felder muessen ausgefuellt werden!");
  } else {
    fetch("/register", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify({
        email,
        password,
      }),
    })
      .then((response) => response.json())
      .then((data) => {
        console.log("Serverantwort:", data);
      })
      .catch((error) => {
        console.error("Fehler beim Senden:", error);
      });
  }
};

const button = document
  .getElementById("register_button")
  .addEventListener("click", registerUser);

//change error handling so that user that wants to register sees error from backend
