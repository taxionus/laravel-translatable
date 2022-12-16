---
title: Available events
weight: 1
---

Right after calling `setTranslation` the `Taxionus\Translatable\Events\TranslationHasBeenSetEvent`-event will be fired.

This is how that event looks like:

```php
namespace Taxionus\Translatable\Events;

class TranslationHasBeenSetEvent
{
    public function __construct(
        public mixed $model,
        public string $key,
        public string $locale,
        public mixed $oldValue,
        public mixed $newValue,
    ) {
        //
    }
}
```
