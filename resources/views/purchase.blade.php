@extends('layouts.app')

@section('content')
  <x-navbar sum="{{$sumAndQuantity['sum']}}" quantity="{{$sumAndQuantity['quantity']}}"/>
    <div class="d-flex flex-wrap flex-lg-nowrap flex-direction-row justify-content-center align-items-start m-lg-5">
      <form action="{{ route('purchase', ($sumAndQuantity['sum']*100)) }}" method="post" id="payment-form" class="ct-payment">
      @method('PUT')
      @csrf
        <div class="stripe-form m-4">
          <label class="puechaseTitle mb-4" for="card-element">
            Tarjeta de crédito o débito
          </label>
          <div id="card-element"></div>
          <div id="card-errors" role="alert"></div>
        </div>
        <button class="btn btn-continue align-self-end ml-4">Pagar</button>
      </form>

      <div class="row-5 row-sm-4 ms-3">
        <div class="card summary mt-5 p-2 ">
            <div class="fw-bold ms-2">
                Factura a Pagar
            </div>
            <hr class="line-sum mx-1 p-0">
            <div class="card-body p-0">
                <ul class="list-group-flush ps-0 ">
                    <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent border-bottom-0">
                        Subtotal sin IVA
                        <span class="badge text-secondary">{{ number_format($sumAndQuantity['sum'] - ($sumAndQuantity['sum']*0.04),2)}}€</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent ">
                        IVA
                        <span class="badge text-secondary">{{number_format($sumAndQuantity['sum']*0.04,2)}}€</span>
                    </li>
                </ul>
                <hr class="line-sum mx-1 p-0">
                <ul class="list-group-flush p-0 mb-0">
                    <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent fw-bold">
                        Total
                        <span class="badge text-secondary">{{number_format($sumAndQuantity['sum'],2)}}€</span>
                    </li>
                </ul>
                
            </div>
        </div>
      </div>
    </div>

  <script src="https://js.stripe.com/v3/"></script>

  <script>
      // Create a Stripe client.
      let stripe = Stripe('{{ env("STRIPE_KEY") }}');
      // Create an instance of Elements.
      let elements = stripe.elements();
      // Custom styling can be passed to options when creating an Element.
      // (Note that this demo uses a wider set of styles than the guide below.)
      let style = {
        base: {
          color: '#32325d',
          lineHeight: '18px',
          fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
          fontSmoothing: 'antialiased',
          fontSize: '16px',
          '::placeholder': {
            color: '#aab7c4'
          }
        },
        invalid: {
          color: '#fa755a',
          iconColor: '#fa755a'
        }
      };
      // Create an instance of the card Element.
      let card = elements.create('card', {style: style});
      // Add an instance of the card Element into the `card-element` <div>.
      card.mount('#card-element');
      // Handle real-time validation errors from the card Element.
      card.addEventListener('change', function(event) {
        let displayError = document.getElementById('card-errors');
        if (event.error) {
          displayError.textContent = event.error.message;
        } else {
          displayError.textContent = '';
        }
      });
      // Handle form submission.
      let form = document.getElementById('payment-form');
      form.addEventListener('submit', function(event) {
        event.preventDefault();

        stripe.createToken(card).then(function(result) {
          if (result.error) {
            // Inform the user if there was an error.
            let errorElement = document.getElementById('card-errors');
            errorElement.textContent = result.error.message;
          } else {
            // Send the token to your server.
            stripeTokenHandler(result.token);
          }
        });
      });

      function stripeTokenHandler(token) {
        // Insert the token ID into the form so it gets submitted to the server
        let form = document.getElementById('payment-form');
        let hiddenInput = document.createElement('input');
        hiddenInput.setAttribute('type', 'hidden');
        hiddenInput.setAttribute('name', 'stripeToken');
        hiddenInput.setAttribute('value', token.id);
        form.appendChild(hiddenInput);
        // Submit the form
        form.submit();
      }

  </script>

@endsection