var applicationId = 'sandbox-sq0idp-uZ9IKyJ_5Gjzd67GMq6NyA';

var paymentForm = new SqPaymentForm({
  applicationId: applicationId,
  inputClass: 'sq-input',
  inputStyles: [
    {
      fontSize: '15px'
    }
  ],
  cardNumber: {
    elementId: 'sq-card-number',
    placeholder: '•••• •••• •••• ••••'
  },
  cvv: {
    elementId: 'sq-cvv',
    placeholder: 'CVV'
  },
  expirationDate: {
    elementId: 'sq-expiration-date',
    placeholder: 'MM/YY'
  },
  postalCode: {
    elementId: 'sq-postal-code'
  },
  callbacks: {

    cardNonceResponseReceived: function(errors, nonce, cardData) {
      if (errors) {
          errors.forEach(function(error) {
            jQuery('#donation_errors').append(error.message + '<br>');
          });
      } else {
        jQuery('#donation_form').hide(function() {
          jQuery('#donation_success').show();
        })
      }
    },

    unsupportedBrowserDetected: function() {
      // Fill in this callback to alert buyers when their browser is not supported.
    }
  }
});

// This function is called when a buyer clicks the Submit button on the webpage
// to charge their card.
function requestCardNonce(event) {

  // This prevents the Submit button from submitting its associated form.
  // Instead, clicking the Submit button should tell the SqPaymentForm to generate
  // a card nonce, which the next line does.
  event.preventDefault();

  paymentForm.requestCardNonce();
}
