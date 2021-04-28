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

You should also install the [NSW Design System](https://github.com/digitalnsw/nsw-design-system) and inlcude the necessary CSS and Javascript into your template. **This package does not include any CSS or Javascript.**

## Available Components

### Layout

| Component                                   | Description                                                                                                                    |
| ------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------ |
| [`x-nsw-container`](#x-nsw-accordion)       | Container                                                                                                                      |
| [`x-nsw-grid`](#x-nsw-accordion)            | [Grid](https://www.digital.nsw.gov.au/digital-service-toolkit/design-system/digital-styles/layout)                             |

### Components

| Component                                   | Description                                                                                                                    |
| ------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------ |
| [`x-nsw-accordion`](#x-nsw-accordion)       | [Accordion](https://digital.nsw.gov.au/digital-service-toolkit/design-system/component-library/accordion)                      |
| [`x-nsw-button`](#x-nsw-button)             | [Buttons](https://www.digital.nsw.gov.au/digital-service-toolkit/design-system/component-library/buttons)                      |
| [`x-nsw-callout`](#x-nsw-callout)           | [Callout](https://digital.nsw.gov.au/digital-service-toolkit/design-system/component-library/callout)                          |
| [`x-nsw-card`](#x-nsw-card)                 | [Cards](https://digital.nsw.gov.au/digital-service-toolkit/design-system/component-library/cards)                              |
| [`x-nsw-global-alert`](#x-nsw-global-alert) | [Global alerts](https://digital.nsw.gov.au/digital-service-toolkit/design-system/component-library/global-alerts)              |
| [`x-nsw-hero-classic`](#x-nsw-hero-classic)   | Hero Classic                                                                                                                    |
| [`x-nsw-notification`](#x-nsw-notification) | [In-page notifications](https://digital.nsw.gov.au/digital-service-toolkit/design-system/component-library/page-notifications) |
| [`x-nsw-tabs`](#x-nsw-tabs)                 | [Tabs](https://digital.nsw.gov.au/digital-service-toolkit/design-system/component-library/navigating/tabs)                     |
| [`pagination`](#pagination)                 | [Pagination](https://www.digital.nsw.gov.au/digital-service-toolkit/design-system/component-library/navigating/pagination)     |

### Forms

| Component                       | Description    |
| ------------------------------- | -------------- |
| [`x-nsw-form`](#x-nsw-form)     | Form container |
| [`x-nsw-input`](#x-nsw-input)   | Text fields    |
| [`x-nsw-select`](#x-nsw-select) | Select         |

---

### `x-nsw-container`

```html
<x-nsw-container>
  <!-- Other content here -->
</x-nsw-container>
```

---

### `x-nsw-grid`

12 column grid with multiple breakpoints.

https://www.digital.nsw.gov.au/digital-service-toolkit/design-system/digital-styles/layout

**size:** `(xs|sm|md|lg|xl)-{width}`

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

https://digital.nsw.gov.au/digital-service-toolkit/design-system/component-library/accordion

**title:** The title of an accordion panel

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

### `x-nsw-button`

https://www.digital.nsw.gov.au/digital-service-toolkit/design-system/component-library/buttons

**text:** Text for the button  
**tag:** `(button|input|a)` (optional)  
**type:** `(button|submit|reset)` (optional)  
**style:** `(primary|outline|highlight|white)` (optional)

```html
// Action button
<x-nsw-button text="Button button" />

// Input button
<x-nsw-button tag="input" text="Input button" style="highlight" />

// Link styled as button
<x-nsw-button tag="a" href="#" text="Link button" style="outline" />
```

---

### `x-nsw-callout`

https://digital.nsw.gov.au/digital-service-toolkit/design-system/component-library/callout

**title:** The callout title  
**icon:** Name of a [Material Icon](https://fonts.google.com/icons) (optional)  
**url:** (optional)  
**linkText:** (optional)

```html
<x-nsw-callout title="Callout title" icon="info" url="https://website.com">
  <p>Callout content</p>
  <x-slot name="linkText">Find out more</x-slot>
</x-nsw-callout>
```

---

### `x-nsw-card`

https://digital.nsw.gov.au/digital-service-toolkit/design-system/component-library/cards

**title:** The card title  
**icon:** Name of a [Material Icon](https://fonts.google.com/icons) (optional)  
**image:** Link to header image url (optional)  
**url:** (optional)  
**date:** A [Carbon](https://carbon.nesbot.com/) date object (optional)  
**highlight:** Use this flag to add a highlight (optional)

> Note: unlike other components, you should not wrap your content in paragraph tags.  
> A styled paragraph container is provided by the component.

```html
<x-nsw-card
  title="Card title"
  icon="info"
  image="https://website.com/some/image.jpg"
  url="https://website.com"
  :date="$carbon_date"
  hightlight
>
  Card content
</x-nsw-card>
```

---

### `x-nsw-global-alert`

https://digital.nsw.gov.au/digital-service-toolkit/design-system/component-library/global-alerts

**title:** The alert title  
**type:** `(info|critial|light)`  
**url:** Link for the "More Information" button (optional)

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

### `x-nsw-hero-classic`

Deprecated version of the Hero Banner component in the NSW Design System

**title:** The hero title  
**image:** Link to background image url  
**url:** (optional)  
**icon:** Name of a [Material Icon](https://fonts.google.com/icons) (optional)  
**dark:** Use this flag to use a dark background (optional)

```html
<x-nsw-hero-classic
  title="Hero title text"
  image="https://some-image.url"
  url="https://website.com"
  icon="check"
  dark
>
  <p>Hero content</p>
</x-nsw-hero-classic>
```

---

### `x-nsw-notification`

https://digital.nsw.gov.au/digital-service-toolkit/design-system/component-library/page-notifications

**title:** The notification title  
**type:** `(info|success|warning|error)`  
**icon:** Name of a [Material Icon](https://fonts.google.com/icons)

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

https://digital.nsw.gov.au/digital-service-toolkit/design-system/component-library/navigating/tabs

**title:** The title of each tab

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

https://www.digital.nsw.gov.au/digital-service-toolkit/design-system/component-library/navigating/pagination

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

---

### `x-nsw-form`

https://digital.nsw.gov.au/digital-service-toolkit/design-system/component-library/forms

```html
<x-nsw-form>
  <!-- Form fields here -->
</x-nsw-form>
```

### `x-nsw-input`

https://digital.nsw.gov.au/digital-service-toolkit/design-system/component-library/forms

**id:** id attribute, will be autogenerated if omitted (optional)  
**name:** Name of the field  
**label:** Label text  
**helpText:** Help text for the field (optional)

```html
 <x-nsw-input
  type="text"
  name="first_name"
  label="Name"
  helpText="Enter your first name"
/>
```

---

### `x-nsw-select`

https://digital.nsw.gov.au/digital-service-toolkit/design-system/component-library/forms

**id:** id attribute, will be autogenerated if omitted (optional)  
**name:** Name of the field  
**options:** key/value pair of select options  
**label:** Label text  
**helpText:** Help text for the field (optional)

```html
<x-nsw-select
  name="color"
  label="Color"
  helpText="Choose a color"
  :options=['r'=>'Red', 'b'=>'Blue', 'g'=>'Green']
/>
```

## Todo

- [Content Blocks](https://digital.nsw.gov.au/digital-service-toolkit/design-system/component-library/content-blocks)
- [Hero banner](https://digital.nsw.gov.au/digital-service-toolkit/design-system/component-library/hero-banner)
- [Hero search](https://digital.nsw.gov.au/digital-service-toolkit/design-system/component-library/navigating/hero-search)
- [Link lists](https://digital.nsw.gov.au/digital-service-toolkit/design-system/component-library/link-lists)
- [Forms](https://www.digital.nsw.gov.au/digital-service-toolkit/design-system/component-library/forms)
- [Other navigation elements](https://www.digital.nsw.gov.au/digital-service-toolkit/design-system/component-library)
