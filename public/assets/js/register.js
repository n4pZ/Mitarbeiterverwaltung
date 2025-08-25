const registerUser = async () => {
  const email = document.getElementById("register_email").value;
  const password = document.getElementById("register_password").value;
  const password_repeat = document.getElementById(
    "register_password_repeat"
  ).value;

  if (password !== password_repeat) {
    return alert("Passwoerter muessen uebereinstimmen!");
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
