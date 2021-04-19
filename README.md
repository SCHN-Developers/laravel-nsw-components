## Laravel NSW Blade Components

Laravel [Blade components](https://laravel.com/docs/8.x/blade#components) using the [NSW Design System](https://github.com/digitalnsw/nsw-design-system)

## Installation

> Note: at this time, the package is not available on packagist

Add the following to the `repositories` sections of your `composer.json`

```
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/SCHN-Developers/laravel-nsw-components"
        }
    ]
```

Then you can add the package to your composer dependencies

```shell
composer require schn/laravel-nsw-components
```

## Available Components

| Component                                   | Description                                                                                                                    |
| ------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------ |
| [`x-nsw-container`](#x-nsw-accordion)       | Container                                                                                                                      |
| [`x-nsw-grid`](#x-nsw-accordion)            | [Grid](https://www.digital.nsw.gov.au/digital-service-toolkit/design-system/digital-styles/layout)                             |
| [`x-nsw-accordion`](#x-nsw-accordion)       | [Accordion](https://digital.nsw.gov.au/digital-service-toolkit/design-system/component-library/accordion)                      |
| [`x-nsw-callout`](#x-nsw-callout)           | [Callout](https://digital.nsw.gov.au/digital-service-toolkit/design-system/component-library/callout)                          |
| [`x-nsw-card`](#x-nsw-card)                 | [Cards](https://digital.nsw.gov.au/digital-service-toolkit/design-system/component-library/cards)                              |
| [`x-nsw-global-alert`](#x-nsw-global-alert) | [Global alerts](https://digital.nsw.gov.au/digital-service-toolkit/design-system/component-library/global-alerts)              |
| [`x-nsw-notification`](#x-nsw-notification) | [In-page notifications](https://digital.nsw.gov.au/digital-service-toolkit/design-system/component-library/page-notifications) |
| [`x-nsw-tabs`](#x-nsw-tabs)                 | [Tabs](https://digital.nsw.gov.au/digital-service-toolkit/design-system/component-library/navigating/tabs)                     |
| [`pagination`](#pagination)                 | [Pagination](https://www.digital.nsw.gov.au/digital-service-toolkit/design-system/component-library/navigating/pagination)     |

---

### `x-nsw-container`

```html
<x-nsw-container>
  <!-- Other content here -->
</x-nsw-container>
```

---

### `x-nsw-grid`

```html
<x-nsw-grid>
  <x-nsw-col size="md-6">
    <!-- Other content here -->
  <x-nsw-col>
  <x-nsw-col size="md-6">
    <!-- Other content here -->
  <x-nsw-col>
</x-nsw-grid>
```

---

### `x-nsw-accordion`

```html
<x-nsw-accordion>
  <x-nsw-panel title="First accordion">
    <p>First accordion content</p>
  </x-nsw-panel>
  <x-nsw-panel title="Second accordion">
    <p>Second accordion content</p>
  </x-nsw-panel>
</x-nsw-accordion>
```

---

### `x-nsw-callout`

```html
<x-nsw-callout title="Callout title" icon="info" url="https://website.com">
  <p>Callout content</p>
  <x-slot name="linkText">Find out more</x-slot>
</x-nsw-callout>
```

---

### `x-nsw-card`

```html
<x-nsw-card
  title="Card title"
  icon="info"
  url="https://website.com"
  :date="$carbon_date"
>
  <p>Card content</p>
</x-nsw-card>
```

---

### `x-nsw-global-alert`

```html
<x-nsw-global-alert
  title="Alert title"
  type="critical"
  url="https://website.com"
>
  <p>Global alret message</p>
</x-nsw-global-alert>
```

---

### `x-nsw-notification`

```html
<x-nsw-notification
  title="Notification title"
  type="success"
  icon="check_circle"
>
  <p>Notification content</p>
</x-nsw-notification>
```

---

### `x-nsw-tabs`

```html
<x-nsw-tabs>
  <x-nsw-tab title="First tab">
    <p>First tab content</p>
  </x-nsw-tab>
  <x-nsw-tab title="Second tab">
    <p>Second tab content</p>
  </x-nsw-tab>
</x-nsw-tabs>
```

---

### `pagination`

Paginators are available for both [Laravel](https://laravel.com/docs/8.x/pagination) and [Livewire](https://laravel-livewire.com/docs/2.x/pagination)

```php
// Default pagination
$model->paginate(10)
$model->links('laravelnswcomponents::pagination.default')

// Simple pagination
$model->simplePaginate(10)
$model->links('laravelnswcomponents::pagination.simple')

// Livewire
$model->paginate(10)
$model->links('laravelnswcomponents::pagination.livewire-default')
```

## Todo

- [Buttons](https://digital.nsw.gov.au/digital-service-toolkit/design-system/component-library/buttons)
- [Content Blocks](https://digital.nsw.gov.au/digital-service-toolkit/design-system/component-library/content-blocks)
- [Hero banner](https://digital.nsw.gov.au/digital-service-toolkit/design-system/component-library/hero-banner)
- [Hero search](https://digital.nsw.gov.au/digital-service-toolkit/design-system/component-library/navigating/hero-search)
- [Link lists](https://digital.nsw.gov.au/digital-service-toolkit/design-system/component-library/link-lists)
- [Forms](https://www.digital.nsw.gov.au/digital-service-toolkit/design-system/component-library/forms)
- [Other navigation elements](https://www.digital.nsw.gov.au/digital-service-toolkit/design-system/component-library)
