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
          clearErrors(function() {
            errors.forEach(function(error) {
              outputError(error.message);
            });
          })
      } else {
        jQuery('#donation_form').hide(function() {
          jQuery('#donation_success').show();
        })
      }
    },

    unsupportedBrowserDetected: function() {
      clearErrors(function() {
        outputError('Your browser is not supported.')
      })
    }
  }
});

function outputError(error) {
  jQuery('#donation_errors').append(error + '<br>');
}

function clearErrors(callback) {
  jQuery('#donation_errors').text('');
  callback();
}

function requestCardNonce(event) {
  event.preventDefault();
  paymentForm.requestCardNonce();
}
