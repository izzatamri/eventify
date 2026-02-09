# Eventify Design System

Design system for the event management platform (create event, tickets, publish, edit ticket). Loaded on all pages that extend `layout_events.html.twig`.

## Assets

- **CSS:** `assets/css/eventify-design.css` – variables, animations, buttons, cards, forms, toasts
- **JS:** `assets/js/eventify-design.js` – ripple, toasts, form validation shake, submit loading, upload zone dragover

## CSS Variables (theme)

| Variable | Usage |
|---------|--------|
| `--ef-primary`, `--ef-primary-dark`, `--ef-primary-gradient` | Primary actions |
| `--ef-secondary-gradient` | Secondary actions |
| `--ef-success`, `--ef-danger`, `--ef-warning` | Semantic states |
| `--ef-transition`, `--ef-transition-fast` | Motion (respects `prefers-reduced-motion`) |
| `--ef-shadow`, `--ef-shadow-lg`, `--ef-shadow-glow` | Elevation |
| `--ef-radius`, `--ef-radius-lg` | Border radius |

## Button classes

Used automatically on existing elements inside `.event-create-page`:

- **Primary (gradient):** `.vl-btn4`, `.save-btn`, `.add-more-tickets-btn` – hover lift, shadow
- **Outline:** `.btn-outline-secondary` – border fill on hover
- **Ghost/link:** `.back-link` – background fade on hover
- **Standalone:** `.ef-btn-primary`, `.ef-btn-outline`, `.ef-btn-ghost`, `.ef-btn-danger` for custom markup

**States:**

- `.ef-btn-loading` – spinner (added by JS on form submit)
- Disabled: reduced opacity, no transform

**Ripple:** Click ripple is applied by JS to `.vl-btn4`, `.save-btn`, `.add-more-tickets-btn`, `.section-add`, `a.preview-btn`. Disabled when `prefers-reduced-motion: reduce`.

## Cards

- `.section-card`, `.summary-card`, `.ticket-type-card`, `.form-panel` – hover shadow/transition
- `.ticket-type-card:hover` – lift (`translateY(-4px)`) and stronger shadow
- Optional: add `.ef-card-hover` for same behavior elsewhere

## Form elements

- `.form-control`, `.form-select` – focus ring (blue glow)
- `.form-control.is-invalid` – red focus ring; add `.ef-shake` for error shake (JS adds on submit when invalid)
- `.upload-zone` – hover/dragover state; JS adds `.dragover` on dragenter

## Steps / progress

- `.step-radio` – transition and focus ring on `.step-active`
- `.step.step-done .step-radio` – scale-in animation

## Toasts

- Flash messages (`app.flashes('success')` / `danger`) are shown as toasts and removed from the page
- API: `EventifyDesign.showToast(message, type)` where `type` is `'success'`, `'error'`, or `'warning'`
- Toasts slide down, show a progress bar, and auto-dismiss after 4s

## Utility classes

- `.ef-transition-all`, `.ef-transition-transform`
- `.ef-hover-lift`, `.ef-hover-scale`
- `.ef-animate-fadeIn`, `.ef-animate-slideUp`, `.ef-animate-scaleIn`
- `.ef-shake` – error shake (e.g. on invalid field)

## Accessibility

- Animations are disabled or minimal when `prefers-reduced-motion: reduce` is set
- Touch targets: min 44px on mobile for buttons
- Toasts use `role="alert"` and `aria-live="polite"` on the container

## Template compatibility

- New classes use the `ef-` prefix
- Existing classes (e.g. `vl-btn4`, `section-card`) are enhanced without removing old behavior
- Scoped under `.event-create-page` where possible to avoid affecting other templates
