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

You should also install the [NSW Design System](https://github.com/digitalnsw/nsw-design-system) and inlcude the - necessary CSS and Javascript into your template. **This package does not include any CSS or Javascript.**

## HTML Starter Template

```
<!doctype html>
<html lang="en" class="no-js">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sydney Children's Hospital Network</title>
  <meta name="robots" content="noindex" />
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <base href="/">
  <link rel="icon" href=".../../favicon.ico">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
  <x-nsw-masthead light />
  <x-nsw-header />

  @yield('content')

  <script src="{{ asset('js/app.js') }}"></script>
    <script>
        window.NSW.initSite()
    </script>
</body>
</html>

```


## Available Components

### Layout

| Component                             | Description                                                                               |
| ------------------------------------- | ----------------------------------------------------------------------------------------- |
| [`x-nsw-masthead`](#x-nsw-masthead)   | [Masthead](https://digitalnsw.github.io/nsw-design-system/components/masthead/index.html) |
| [`x-nsw-header`](#x-nsw-header)       | [Header](https://nswdesignsystem.surge.sh/components/header/index.html)                   |
| [`x-nsw-container`](#x-nsw-container) | [Layout](https://digitalnsw.github.io/nsw-design-system/core/layout/index.html)           |
| [`x-nsw-grid`](#x-nsw-grid)           | [Grid](https://digitalnsw.github.io/nsw-design-system/core/grid/index.html)               |
| [`x-nsw-section`](#x-nsw-section)     | [Section](https://digitalnsw.github.io/nsw-design-system/core/section/index.html)         |
| [`x-nsw-nav-container`](#x-nsw-nav-container)     | [Navigation Container](https://digitalnsw.github.io/nsw-design-system/components/main-nav/index.html)         |
| [`x-nsw-nav-item`](#x-nsw-nav-item)     | [Navigation Item](https://digitalnsw.github.io/nsw-design-system/components/main-nav/index.html)         |
| [`x-nsw-nav-subitem`](#x-nsw-nav-subitem)     | [Navigation Sub Item](https://digitalnsw.github.io/nsw-design-system/components/main-nav/index.html)         |

### Components

| Component                                   | Description                                                                                                |
| ------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| [`x-nsw-accordion`](#x-nsw-accordion)       | [Accordion](https://digitalnsw.github.io/nsw-design-system/components/accordion/index.html)                |
| [`x-nsw-button`](#x-nsw-button)             | [Buttons](https://www.digital.nsw.gov.au/digital-service-toolkit/design-system/component-library/buttons)  |
| [`x-nsw-callout`](#x-nsw-callout)           | [Callout](https://digital.nsw.gov.au/digital-service-toolkit/design-system/component-library/callout)      |
| [`x-nsw-card`](#x-nsw-card)                 | [Cards](https://digitalnsw.github.io/nsw-design-system/components/card/index.html)                         |
| [`x-nsw-global-alert`](#x-nsw-global-alert) | [Global alerts](https://digitalnsw.github.io/nsw-design-system/components/global-alert/index.html)         |
| [`x-nsw-hero-classic`](#x-nsw-hero-classic) | Hero Classic (deprecated)                                                                                  |
| [`x-nsw-hero-banner`](#x-nsw-hero-banner)   | [Hero Banner](https://digitalnsw.github.io/nsw-design-system/components/hero-banner/index.html)            |
| [`x-nsw-notification`](#x-nsw-notification) | [In-page notifications](https://digitalnsw.github.io/nsw-design-system/components/in-page-note/index.html) |
| [`x-nsw-tabs`](#x-nsw-tabs)                 | [Tabs](https://digitalnsw.github.io/nsw-design-system/components/tabs/index.html)                          |
| [`pagination`](#pagination)                 | [Pagination](https://digitalnsw.github.io/nsw-design-system/components/pagination/index.html)              |
| [`x-nsw-link-list`](#pagination)                 | [Link list](https://digitalnsw.github.io/nsw-design-system/components/link-list/index.html)              |

### Forms

| Component                                       | Description    |
| ----------------------------------------------- | -------------- |
| [`x-nsw-form`](#x-nsw-form)                     | Form container |
| [`x-nsw-input`](#x-nsw-input)                   | Text fields    |
| [`x-nsw-select`](#x-nsw-select)                 | Select         |
| [`x-nsw-checkbox`](#x-nsw-checkbox)             | Checkbox       |
| [`x-nsw-checkbox-group`](#x-nsw-checkbox-group) | Checkbox group |

---

### `x-nsw-masthead`

The Masthead displays across the top of all NSW Government sites and clearly identifies your site as part of the NSW Government. (v3.0)

https://digitalnsw.github.io/nsw-design-system/components/masthead/index.html

- **light:** Optional parameter to add for light variant

```html
<x-nsw-masthead light />
```

---

### `x-nsw-header`

The NSW Government network header displays across the top of all NSW Government sites. It helps users see which service they are using. (v3.0)

https://digitalnsw.github.io/nsw-design-system-docs/components/header/index.html

```html
<x-nsw-header />
```

---

### `x-nsw-container`

A nsw-container keeps a container width of 1200px and the nsw-page-layout acts as a wrapper to align the content's spacing. (v3.0)

https://digitalnsw.github.io/nsw-design-system/core/layout/index.html

- **sidebar:** `(left|right)` (optional)

_left_ - Displays a left hand sidebar that is visible on 992px+ viewports, with a main content area that is always visible. (Recommended for side navigation)

_right_ - Displays a right hand sidebar that stacks on 0 - 991px viewports, with main content area that is always visible.

```html
<x-nsw-container sidebar="left">
  <!-- Other content here -->
  <x-slot name="sidebar_content">
    <!-- Sidebar content -->
  </x-slot>
</x-nsw-container>
```

---

### `x-nsw-grid`

12 column grid with multiple breakpoints. (v3.0)

https://digitalnsw.github.io/nsw-design-system/core/grid/index.html

- **size:** `(xs|sm|md|lg|xl)-{width}`

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

### `x-nsw-section`

Flexible layout component that groups content and components together providing consistent vertical spacing. (v3.0)

https://digitalnsw.github.io/nsw-design-system/core/section/index.html

- **padding:** `(half|no)` (optional)
- **style:** `(color|image|box)` (optional)
- **color:** `(brand-dark|brand-light|brand-supplementary|black|white|grey-01|grey-02...)` (optional)
- **image:** `e.g. https://picsum.photos/id/199/2000/1250` (optional)

```html
<x-nsw-section style="color" color="brand-dark" padding="half">
  <p>section content...</p>
</x-nsw-section>
```

---

### `x-nsw-nav-container`
### `x-nsw-nav-item`
### `x-nsw-nav-subitem`

Orientates a user and helps them move through the site. (v3.0)

https://digitalnsw.github.io/nsw-design-system/components/main-nav/index.html

- **name:** The name of an menu item
- **url:** The target of the link (optional)
- **description:** Short text to describe the submenu (optional)

```html
<x-nsw-nav-container>
  <x-nsw-nav-item
    name="Home"
    url="/home"
  />
  <x-nsw-nav-item
    name="Services"
    url="/our-services"
    description="Choose from the services on offer"
  >
    <x-nsw-nav-subitem name="Clinical" url="/services/clinical" >
    <x-nsw-nav-subitem name="Non Clinical" url="/services/non-clinical" >
  </x-nsw-nav-item>
</x-nsw-nav-container>
```

---

### `x-nsw-accordion`

An accordion is a series of expandable vertical panels, designed to save space on a page by hiding content and revealing it as required. (v3.0)

https://digitalnsw.github.io/nsw-design-system/components/accordion/index.html

- **title:** The title of an accordion panel
- **expandToggle:** (`true|null`) Display 'Expand all / Collapse all' toggle at top of Accordion (optional)

```html
<x-nsw-accordion expandToggle="true">
  <x-nsw-panel title="Foo"> The foo </x-nsw-panel>
  <x-nsw-panel title="Bar"> The bar </x-nsw-panel>
</x-nsw-accordion>
```

---

### `x-nsw-button`

Buttons provide users with the ability to submit an action. (v3.0)

https://digitalnsw.github.io/nsw-design-system/components/button/index.html

- **text:** Text for the button
- **tag:** `(button|input|a)` (optional)
- **type:** `(button|submit|reset)` (optional)
- **style:** `(dark|dark-outline|dark-outline-solid|light|light-outline|white|danger)` (optional)
- **icon:** material icon name (optional)

```html
// Action button
<x-nsw-button text="Button button" />

// Input button
<x-nsw-button tag="input" text="Input button" style="danger" />

// Link styled as button
<x-nsw-button tag="a" href="#" text="Link button" style="dark-outline-solid" />

// Button with icon
<x-nsw-button text="Download" style="white" icon="download" />
```

---

### `x-nsw-callout`

Callouts are a snippet of information that draws attention to important content. (v3.0)

https://digitalnsw.github.io/nsw-design-system/components/callout/index.html

- **title:** The callout title
- **icon:** Name of a [Material Icon](https://fonts.google.com/icons) (optional)
- **url:** (optional)
- **linkText:** (optional)

```html
<x-nsw-callout title="Callout title" icon="info" url="https://website.com">
  <p>Callout content</p>
  <x-slot name="linkText">Find out more</x-slot>
</x-nsw-callout>
```

---

### `x-nsw-card`

Cards group related content or tasks to make it easier for users to scan, read, and find information. (v3.0)

https://digitalnsw.github.io/nsw-design-system/components/card/index.html

- **title:** The card title
- **icon:** Name of a [Material Icon](https://fonts.google.com/icons) (optional)
- **image:** Link to header image url (optional)
- **url:** (optional)
- **date:** A [Carbon](https://carbon.nesbot.com/) date object (optional)
- **highlight:** Use this flag to add a highlight - not shown when 'style' is applied (optional)
- **tag:** Display a text tag at the top of the card content section to categorize the content (optional)
- **style:** (`dark|light|null`) background color brand dark or light - negates highlight (optional)

```html
<x-nsw-card
  title="Card title"
  icon="info"
  image="https://website.com/some/image.jpg"
  url="https://website.com"
  :date="$carbon_date"
  highlight
>
  <p>Card content</p>
</x-nsw-card>
```

---

### `x-nsw-global-alert`

Global alerts display across the top of an entire site to convey important information to users. (v3.0)

https://digital.nsw.gov.au/digital-service-toolkit/design-system/component-library/global-alerts

- **title:** The alert title
- **type:** `(null|critial|light)` (optional)
- **url:** Link for the "More Information" button (optional)
- **buttonText:** Button text for CTA in alert (optional)

```html
<x-nsw-global-alert
  title="Alert title"
  type="critical"
  url="https://google.com"
  buttonText="OK!"
>
  <p>Global alert message</p>
</x-nsw-global-alert>
```

---

### `x-nsw-hero-classic`

Deprecated version of the Hero Banner component in the NSW Design System

- **title:** The hero title
- **image:** Link to background image url
- **url:** (optional)
- **icon:** Name of a [Material Icon](https://fonts.google.com/icons) (optional)
- **dark:** Use this flag to use a dark background (optional)

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

### `x-nsw-hero-banner`

The hero banner reflects the goals or purpose of the product or service. (v3.0)

- **style:** `(dark|light)` (optional)
- **title:** Main title text for banner
- **image:** Link to background image url on right hand side (optional)
- **text:** Slot for banner subtext (optional)
- **action:** Slot for call to action button (optional)

```html
<x-nsw-hero-banner
  style="light"
  title="Hero Banner's Title"
  image="https://picsum.photos/id/237/2000/1250"
>
  <x-nsw-slot name="text">
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse deserunt
    possimus eos quis ab numquam, repellendus officia unde fugit iure sint animi
    aperiam facilis ad non corporis assumenda, aut magni!
  </x-nsw-slot>
  <x-nsw-slot name="action">
    <x-nsw-button text="Do Something!" style="dark" />
  </x-nsw-slot>
</x-nsw-hero-banner>
```

---

### `x-nsw-notification`

In-page notifications are used to contextually inform users of important information or status of an interaction. (v3.0)

https://digitalnsw.github.io/nsw-design-system/components/in-page-note/index.html

- **title:** The notification title
- **type:** `(info|success|warning|error)`
- **icon:** Name of a [Material Icon](https://fonts.google.com/icons)

```html
<x-nsw-notification
  title="Damn! Something has gone wrong!"
  type="error"
  icon="warning"
>
  <p>Better go back and fix it up!</p>
</x-nsw-notification>
```

---

### `x-nsw-tabs`

Tabs are a form of secondary in-page navigation, helping to group different types of content in a limited space. (v3.0)

https://digitalnsw.github.io/nsw-design-system/components/tabs/index.html

- **title:** The title of each tab

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

Pagination breaks down large amounts of content across a series of pages. (v3.0)

Paginators are available for both [Laravel](https://laravel.com/docs/8.x/pagination) and [Livewire](https://laravel-livewire.com/docs/2.x/pagination)

https://digitalnsw.github.io/nsw-design-system/components/pagination/index.html

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

// Livewire - simple
$model->paginate(10)
$model->links('laravelnswcomponents::pagination.livewire-simple')
```

---

### `x-nsw-link-list`

Link lists surface and group related content.

https://digitalnsw.github.io/nsw-design-system/components/link-list/index.html

- **url:** the target url
- **name:** The label text to display on the row

```html
<x-nsw-link-list>
  <x-nsw-list-item url="http://www.google.com" name="Google" />
  <x-nsw-list-item url="http://www.bing.com" name="Bing" />
</x-nsw-link-list>
```

---

### `x-nsw-form`

Forms are used to capture data from users. (v3.0)

https://nswdesignsystem.surge.sh/components/forms/index.html

```html
<x-nsw-form>
  <!-- Form fields here -->
</x-nsw-form>
```

---

### `x-nsw-input`

(v3.0)

https://nswdesignsystem.surge.sh/components/forms/index.html

- **id:** id attribute, will be autogenerated if omitted (optional)
- **name:** Name of the field
- **label:** Label text
- **helpText:** Help text for the field (optional)
- **required:** Show a red asterisk next the field label to indicate that it's required (optional)

```html
<x-nsw-input
  type="text"
  name="first_name"
  label="Name"
  helpText="Enter your first name"
  required
/>
```

---

### `x-nsw-select`

(v3.0)

https://nswdesignsystem.surge.sh/components/forms/index.html

- **id:** id attribute, will be autogenerated if omitted (optional)
- **name:** Name of the field
- **options:** key/value pair of select options
- **label:** Label text
- **helpText:** Help text for the field (optional)
- **required:** Show a red asterisk next the field label to indicate that it's required (optional)

```html
<x-nsw-select
  name="color"
  label="Color"
  :options="['r'=>'Red', 'b'=>'Blue', 'g'=>'Green']"
  required
/>
```

---

### `x-nsw-checkbox`

(v3.0)

https://nswdesignsystem.surge.sh/components/forms/index.html

- **id:** id attribute, will be autogenerated if omitted (optional)
- **name:** Name of the field
- **value:** value of the selection (optional)
- **label:** Label text
- **required:** Show a red asterisk next the field label to indicate that it's required (optional)

```html
<x-nsw-checkbox
  name="terms_and_conditions"
  label="I agree the all terms and conditions"
  required
/>
```

### `x-nsw-checkbox-group`

(v3.0)

https://nswdesignsystem.surge.sh/components/forms/index.html

- **name:** Name of the checkbox group (should be same as subsequent checkbox components for validation purposes
- **label:** Label text
- **helpText:** Help text for the group (optional)
- **required:** Show a red asterisk next the group label to indicate that it's required (optional)

```html
<x-nsw-checkbox-group
  name="fav_pet"
  label="Your favourite pet"
  helpText="Select all that apply"
  required
>
  <x-nsw-checkbox name="fav_pet" label="Dogs" value="dogs" />
  <x-nsw-checkbox name="fav_pet" label="Cats" value="cats" />
</x-nsw-checkbox-group>
```

### `x-nsw-radio-group`

(v3.0)

https://nswdesignsystem.surge.sh/components/forms/index.html

- **name:** Name of the radio group
- **label:** Label text
- **helpText:** Help text for the group (optional)
- **options:** key/value pair of select options
- **required:** Show a red asterisk next the group label to indicate that it's required (optional)

```html
<x-nsw-radio-group
  name="fav_color"
  label="What is your favourite color?"
  helpText="Select one"
  :options="['red' => 'Red', 'green' => 'Green', 'blue' => 'Blue']"
  required
/>
```
