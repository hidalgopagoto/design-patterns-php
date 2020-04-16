<?php
namespace Interfaces;
interface CreditCardInterface {
    public function pay(): array;
    public function authorize(): array;
    public function capture(): array;
}