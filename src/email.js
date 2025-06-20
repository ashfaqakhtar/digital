  function submitForm(e) {
    e.preventDefault();

    const form = document.getElementById("leadForm");
    const formData = new FormData(form);

    fetch("send-email.php", {
      method: "POST",
      body: formData
    })
    .then(res => res.text())
    .then(response => {
      if (response.trim() === "success") {
        //alert("Email sent successfully!");
        // Optionally redirect or move to next step
      } else {
        //alert("Email sending failed.");
      }
    })
    .catch(() => alert("Something went wrong."));
  }
