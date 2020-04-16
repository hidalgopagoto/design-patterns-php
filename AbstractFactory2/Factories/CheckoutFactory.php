<?php
namespace Factories;

class CheckoutFactory
{
    public function get(string $bank, string $method)
    {
        switch ($bank) {
            case 'itau':
                switch ($method) {
                    case 'paymentslip':
                        return (new ItauGatewayFactory())->createPaymentSlipCheckout();
                    break;
                    case 'creditcard':
                        return (new ItauGatewayFactory())->createCreditCardCheckout();
                    break;
                }
            break;
            case 'citibank':
                switch ($method) {
                    case 'paymentslip':
                        return (new CitibankGatewayFactory())->createPaymentSlipCheckout();
                        break;
                    case 'creditcard':
                        return (new CitibankGatewayFactory())->createCreditCardCheckout();
                        break;
                }
            break;
            case 'cielo':
                switch ($method) {
                    case 'paymentslip':
                        return (new CieloGatewayFactory())->createPaymentSlipCheckout();
                        break;
                    case 'creditcard':
                        return (new CieloGatewayFactory())->createCreditCardCheckout();
                        break;
                }
            break;
            case 'rede':
                switch ($method) {
                    case 'paymentslip':
                        return (new RedeGatewayFactory())->createPaymentSlipCheckout();
                        break;
                    case 'creditcard':
                        return (new RedeGatewayFactory())->createCreditCardCheckout();
                        break;
                }
            break;
        }
    }
}