<?php
namespace Interfaces;
interface PaymentSlipInterface {
    public function pay(): array;
    public function register(): array;
    public function compensate(): array;
}