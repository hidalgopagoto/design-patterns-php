<?php
namespace Entities;

class MonkeyHandler extends AbstractHandler
{
    public function handle(string $request): ?string
    {
        if ($request === 'Banana') {
            return 'Monkey: I\'ll eat the '.$request;
        } else {
            return parent::handle($request);
        }
    }
}