# WebDev Activity — Login, Registration & Landing Page (jQuery Validation)

A three-page front-end activity built with **HTML**, **CSS**, **jQuery** and the
**jQuery Validation plugin**. No build step and no backend — it runs straight from
GitHub Pages.

## Pages

| File | Purpose |
| --- | --- |
| `index.html` | Login form (username + password) |
| `register.html` | Registration form (name, email, username, password, confirm password) |
| `landing.html` | Protected welcome page, only reachable after a successful login |

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
- If no session is present, the page immediately redirects to `index.html`
- Greets the user with `Welcome, [username]!`
- Logout clears the session and returns to the login page

## Project structure

```
webdev-activity/
├── index.html
├── register.html
├── landing.html
└── assets/
    ├── css/style.css
    └── js/
        ├── auth.js       shared localStorage + session helpers
        ├── login.js      login rules and credential check
        ├── register.js   registration rules and success feedback
        └── landing.js    access guard, welcome message, logout
```

## Run locally

Open `index.html` directly in a browser, or serve the folder:

```bash
npx serve .
```

## Deploy to GitHub Pages

1. Create a new repository named `webdev-activity` (public).
2. Push this folder to it:

   ```bash
   git remote add origin https://github.com/<your-username>/webdev-activity.git
   git add .
   git commit -m "Login, registration and landing page with jQuery Validation"
   git push -u origin main
   ```

3. In the repo go to **Settings → Pages → Build and deployment**, set
   **Source** to *Deploy from a branch*, branch `main`, folder `/ (root)`, and save.
4. The site is published at
   `https://<your-username>.github.io/webdev-activity/`.

Because the navigation uses relative links (`index.html`, `register.html`,
`landing.html`), the project works at a user site root or under a project
sub-path without further changes.

## Note on security

The credentials live in `localStorage` and are compared in plain JavaScript, so
anyone can read them from the browser console. That is intentional here — the
brief asks for static values checked client-side. A real application would send
credentials to a server and store sessions in secure, HTTP-only cookies.
