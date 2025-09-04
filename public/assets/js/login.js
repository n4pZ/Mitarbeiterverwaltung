const loginUser = async () => {
  const email = document.getElementById("login_email").value;
  const password = document.getElementById("login_password").value;

  if (email.trim() === "" || password.trim() === "") {
    return alert("Alle Felder muessen ausgefuellt werden!");
  }

  fetch("/login", {
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
      if (data.success) {
        window.location.href = data.redirect;
      } else {
        alert(data.message);
      }
    })
    .catch((error) => {
      console.error("Fehler beim Senden:", error);
    });
};

const button = document
  .getElementById("login_button")
  .addEventListener("click", loginUser);
