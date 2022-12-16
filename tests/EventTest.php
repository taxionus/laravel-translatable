<?php

use Illuminate\Support\Facades\Event;
use Taxionus\Translatable\Events\TranslationHasBeenSetEvent;
use Taxionus\Translatable\Test\TestSupport\TestModel;

beforeEach(function () {
    Event::fake();

    $this->testModel = new TestModel();
});

it('will fire an event when a translation has been set', function () {
    $this->testModel->setTranslation('name', 'en', 'testValue_en');

    Event::assertDispatched(TranslationHasBeenSetEvent::class);
});
