# WebDev Activity — Login, Registration & Landing Page (jQuery Validation)

A three-page front-end activity built with **HTML**, **CSS**, **jQuery** and the
**jQuery Validation plugin**. No build step and no backend — it runs straight from
GitHub Pages.

## Pages

| File | Purpose |
| --- | --- |
| `login.html` | Login form (username + password) |
| `register.html` | Registration form (name, email, username, password, confirm password) |
| `landing_page.html` | Protected welcome page, only reachable after a successful login |

## Demo credentials

```
username: admin
password: 12345
```

Accounts created on the registration page are also accepted by the login form.
Both are stored in the browser's `localStorage`, so the data stays on your own
machine and resets if you clear site data.

## Validation rules

**Login**
- Username — required, minimum 3 characters
- Password — required, minimum 5 characters
- Wrong credentials show an error banner instead of navigating away

**Register**
- Name — required, minimum 2 characters
- Email — required, valid email format
- Username — required, minimum 3 characters, must be unique
- Password — required, minimum 5 characters, must contain a letter and a number
- Confirm password — required, must match the password field
- Success shows a confirmation banner and clears the form

**Landing**
- If no session is present, the page immediately redirects to `login.html`
- Greets the user with `Welcome, [username]!`
- Logout clears the session and returns to the login page

## Project structure

```
webdev-activity/
├── login.html
├── register.html
├── landing_page.html
└── assets/
    ├── css/style.css
    └── js/
        ├── auth.js       shared localStorage + session helpers
        ├── login.js      login rules and credential check
        ├── register.js   registration rules and success feedback
        └── landing.js    access guard, welcome message, logout
```

## Run locally

Open `login.html` directly in a browser, or serve the folder:

```bash
npx serve .
```

## Live site

Repository: <https://github.com/pollemu/Benedicto-NT3101-Act>

| Page | URL |
| --- | --- |
| Login | <https://pollemu.github.io/Benedicto-NT3101-Act/login.html> |
| Register | <https://pollemu.github.io/Benedicto-NT3101-Act/register.html> |
| Landing | <https://pollemu.github.io/Benedicto-NT3101-Act/landing_page.html> |

## Deploy to GitHub Pages

The site is deployed straight from the `main` branch:

1. In the repository go to **Settings → Pages → Build and deployment**.
2. Set **Source** to *Deploy from a branch*, branch `main`, folder `/ (root)`.
3. Save. GitHub publishes the site within a minute or two and keeps it in sync
   with every push to `main`.

To push changes from a fresh clone:

```bash
git clone https://github.com/pollemu/Benedicto-NT3101-Act.git
cd Benedicto-NT3101-Act
git add .
git commit -m "Describe your change"
git push
```

Because the navigation uses relative links (`login.html`, `register.html`,
`landing_page.html`), the project works at a user site root or under a project
sub-path without further changes. There is no `index.html`, so the bare
`.../Benedicto-NT3101-Act/` URL returns 404 — link the three pages directly.

## Note on security

The credentials live in `localStorage` and are compared in plain JavaScript, so
anyone can read them from the browser console. That is intentional here — the
brief asks for static values checked client-side. A real application would send
credentials to a server and store sessions in secure, HTTP-only cookies.
