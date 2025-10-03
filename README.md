# 🎬 Laravel CineMemo Button

A reusable Laravel Blade component for cinema-style animated buttons with TailwindCSS and dark mode support.  
Perfect for apps that want a **cinematic feel** ✨.

---

## 🚀 Installation

Require via Composer:

```bash
composer require volodymyr0587/laravel-cinememo-button
```
Laravel auto-discovers the service provider, so no manual registration is needed.

## 🔧 Usage
In your Blade views, use the component:

```
<x-cinememo-button palette="gold" size="lg" glow href="/register">
    Sign Up
</x-cinememo-button>
```

## ⚙️ Props
| Prop      | Type        | Values                                                                                 | Default |
| --------- | ----------- | -------------------------------------------------------------------------------------- | ------- |
| `href`    | string|null | If set, renders `<a>` instead of `<button>`                                            | `null`  |
| `size`    | string      | `sm`, `md`, `lg`, `xl`                                                                 | `md`    |
| `palette` | string      | `gold`, `red`, `silver`, `neon`, `blue`, `purple`, `white`, `black`, `green`, `orange` | `gold`  |
| `glow`    | bool        | Adds glowing shadow effect                                                             | `false` |

## 🎨 Customization
You can publish the Blade view and modify it:
```bash
php artisan vendor:publish --tag=cinememo-button-views
```
This will copy the component to:
```bash
resources/views/components/cinememo-button.blade.php
```
where you can fully customize it.

## 🖼 Example
```bash
<x-cinememo-button palette="red" size="xl" glow>
    🎟 Buy Ticket
</x-cinememo-button>
```

## 📄 License

This package is open-sourced software licensed under the MIT license
.