<?php
namespace Entities;

class DogHandler extends AbstractHandler
{
    public function handle(string $request): ?string
    {
        if ($request === 'Bone') {
            return 'Dog: I\'ll eat the '.$request;
        } else {
            return parent::handle($request);
        }
    }
}