<?php

use LightSideSoftware\EVat\V1\Types\Annotations\SheetPageCountTypeValidation;

beforeEach(function () {
    $this->validation = new SheetPageCountTypeValidation();
});

test('sheet page count validation', function (int $value, bool $hasErrors) {
    expect($this->validation->validateProperty('value', $value)->hasErrors())->toBe($hasErrors);
})->with([
    [1, false],
    [999, false],
    [0, true],
    [1000, true],
]);
