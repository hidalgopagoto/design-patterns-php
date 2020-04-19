<?php
namespace Entities;

class SquirrelHandler extends AbstractHandler
{
    public function handle(string $request): ?string
    {
        if ($request === 'Nut') {
            return 'Squirrel: I\'ll eat the '.$request;
        } else {
            return parent::handle($request);
        }
    }
}