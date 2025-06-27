// This is a public sample test API key.
// Don’t submit any personally identifiable information in requests made with this key.
// Sign in to see your own test API key embedded in code samples.
const stripe = Stripe("pk_live_51Rb7fDHcnj11XqyCDeaCZgHzoKZakax2c3EDMU14ku78Stt03X7fHyVyxz12CHBX5n1kTRO3pJwEIBMqPruNtSBN00dnSEaJgT");

let checkout;
initialize();

const validateEmail = async (email) => {
  const updateResult = await checkout.updateEmail(email);
  const isValid = updateResult.type !== "error";

  return { isValid, message: !isValid ? updateResult.error.message : null };
};

document
  .querySelector("#payment-form")
  .addEventListener("submit", handleSubmit);

// Fetches a Checkout Session and captures the client secret
async function initialize(clientSecret) {
 const appearance = {
  theme: 'none',
  variables: {
    colorPrimary: '#F36B21',
    colorBackground: '#1c1c1c',
    colorText: '#ffffff',
    fontFamily: 'Poppins, sans-serif',
    spacingUnit: '5px',
    borderRadius: '8px',
  },
  rules: {
    '.Input': {
      color: '#ffffff',
      backgroundColor: '#1c1c1c',
      border: '1px solid #4a5568',
      boxShadow: 'none',
    },
    '.Label': {
      color: '#f3f4f6',
    },
    '.Tab': {
      border: '1px solid #fffff',
      padding: '10px',
      borderRadius: '8px',
    },
  },
};

  checkout = await stripe.initCheckout({
    fetchClientSecret: () => clientSecret,
    elementsOptions: { appearance },
  });

  if (window.totalAmount && clientSecret) {
    const total = window.totalAmount;
    const button = document.querySelector("#button-text");
    if (button) {
      button.textContent = `Pay $${total} now`;
    }
  }

  const emailInput = document.getElementById("email");
  const emailErrors = document.getElementById("email-errors");

  emailInput.addEventListener("input", () => {
    emailErrors.textContent = "";
  });

  emailInput.addEventListener("blur", async () => {
    const newEmail = emailInput.value;
    if (!newEmail) return;
    const { isValid, message } = await validateEmail(newEmail);
    if (!isValid) {
      emailErrors.textContent = message;
    }
  });

  const paymentElement = checkout.createPaymentElement();
  paymentElement.mount("#payment-element");
}

async function handleSubmit(e) {
  e.preventDefault();
  setLoading(true);

  const email = document.getElementById("email").value;
  const { isValid, message } = await validateEmail(email);
  if (!isValid) {
    showMessage(message);
    setLoading(false);
    return;
  }

  const { error } = await checkout.confirm();

  // This point will only be reached if there is an immediate error when
  // confirming the payment. Otherwise, your customer will be redirected to
  // your `return_url`. For some payment methods like iDEAL, your customer will
  // be redirected to an intermediate site first to authorize the payment, then
  // redirected to the `return_url`.
  showMessage(error.message);

  setLoading(false);
}

// ------- UI helpers -------

function showMessage(messageText) {
  const messageContainer = document.querySelector("#payment-message");

  messageContainer.classList.remove("hidden");
  messageContainer.textContent = messageText;

  setTimeout(function () {
    messageContainer.classList.add("hidden");
    messageContainer.textContent = "";
  }, 4000);
}

// Show a spinner on payment submission
function setLoading(isLoading) {
  if (isLoading) {
    // Disable the button and show a spinner
    document.querySelector("#submit").disabled = true;
    document.querySelector("#spinner").classList.remove("hidden");
    document.querySelector("#button-text").classList.add("hidden");
  } else {
    document.querySelector("#submit").disabled = false;
    document.querySelector("#spinner").classList.add("hidden");
    document.querySelector("#button-text").classList.remove("hidden");
  }
}