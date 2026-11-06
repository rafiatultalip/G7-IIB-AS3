# G7-IIB-AS3: Sips Brownies

A small multi-page website for **Sips Brownies**, built by **Group 7** with Laravel and served locally over HTTPS with Laravel Herd at `https://group7.test`.

## Team Members

| Name | Role | Page / Responsibility |
|------|------|-----------------------|
| Rafiatul | Repository owner, Home page developer | Home page (`/`), Laravel setup, Herd HTTPS setup, README, `v1.0` release tag |
| Damia | About page developer | About page (`/about`) |
| Shifa | Contact page developer | Contact page (`/contact`), resolved the merge conflict |

## About the Site

Sips Brownies is a fun brownie shop website with a chocolate-brown theme, playful fonts (Pacifico and Fredoka) and brownie illustrations.

| Page | URL | Description |
|------|-----|-------------|
| Home | `/` | Hero banner, "Order Now" button and our favourite brownies |
| About | `/about` | Our story and the team |
| Contact | `/contact` | Email, phone, opening hours and how to order |

Every page shares the same navigation bar and a footer reading "Group 7 | G7-IIB-AS3".

## Running Locally with Laravel Herd

**Requirements:** Git, Composer and [Laravel Herd](https://herd.laravel.com) (it must be running).

1. Clone the repository **into a folder named `group7`** inside your Herd folder. The folder name decides the site address.
   ```powershell
   cd ~\Herd
   git clone https://github.com/rafiatultalip/G7-IIB-AS3.git group7
   cd group7
   ```
2. Install the dependencies and set up the environment:
   ```powershell
   composer install
   copy .env.example .env
   php artisan key:generate
   php artisan migrate
   ```
3. Link and secure the site with HTTPS:
   ```powershell
   herd link group7
   herd secure group7
   ```
4. Open **https://group7.test** in your browser. The pages are at `/about` and `/contact`.

**Troubleshooting**
- If the browser says the connection is not private, the local certificate is not trusted yet. Re-run `herd secure group7` as administrator, or click **Advanced → Proceed**.
- If you see Herd's own "404 Site not found", run `herd link group7` and `herd restart`.
- If a page says "View not found", run `git checkout main` and `git pull` to get the latest code.

## Git Workflow

We use a **feature-branch workflow** with a **protected `main` branch**.

- Direct pushes to `main` are blocked. Every change goes through a Pull Request.
- Each Pull Request needs at least one approval from another team member before merging.
- Branches are short-lived and deleted after merging.
- Branch names follow a `type/description` convention:
  - `feature/<name>` for new pages or features (e.g. `feature/contact`)
  - `fix/<name>` for bug fixes (e.g. `fix/home-route`)
  - `docs/<name>` for documentation (e.g. `docs/readme`)
- Every change follows the same cycle: branch → commit → push → open PR → review → merge.
- Commit messages use a short prefix, such as `feat: add about page` or `fix: resolve merge conflict in routes`.

## Merge Conflict Resolution

**What happened:** Damia (`feature/about`) and Shifa (`feature/contact`) each added a new route at the end of `routes/web.php` on separate branches that both started from the same `main`. The About Pull Request (#6) was merged first. When Shifa then brought the latest `main` into `feature/contact`, Git reported a conflict in `routes/web.php` because both branches had changed the same part of the file.

**How we resolved it:**
1. Shifa switched to the branch and pulled the latest `main` into it:
   ```powershell
   git checkout feature/contact
   git pull origin main
   ```
2. Git marked the conflict in `routes/web.php` with `<<<<<<<`, `=======` and `>>>>>>>` lines. Until they were removed, the site showed a `ParseError`.
3. Both routes were needed, so we kept both the `/about` and `/contact` routes and deleted the marker lines.
4. We tested the pages, then committed and pushed the resolution:
   ```powershell
   git add routes/web.php
   git commit -m "fix: resolve merge conflict in routes"
   git push
   ```
5. The conflict message disappeared and Pull Request #7 was approved and merged.

**Follow-up fix:** After the merge we noticed the Home route (`/`) had been dropped from `routes/web.php`, so Home returned a 404. We fixed it with a new `fix/home-route` branch and Pull Request, like every other change.

## Merged Pull Requests

Base link: https://github.com/rafiatultalip/G7-IIB-AS3/pull/

- [#2 Add initial Laravel project](https://github.com/rafiatultalip/G7-IIB-AS3/pull/2) (`feature/laravel-setup`)
- [#3 Add home page](https://github.com/rafiatultalip/G7-IIB-AS3/pull/3) (`feature/home-page`)
- [#4 Add footer and basic styling](https://github.com/rafiatultalip/G7-IIB-AS3/pull/NUMBER) (`feature/footer`)
- [#5 Add Sips Brownies home page](https://github.com/rafiatultalip/G7-IIB-AS3/pull/5) (`feature/brownies-home`)
- [#6 Add about page](https://github.com/rafiatultalip/G7-IIB-AS3/pull/6) (`feature/about`)
- [#7 Add contact page, with conflict resolved](https://github.com/rafiatultalip/G7-IIB-AS3/pull/7) (`feature/contact`)
- [#8 Restore home route](https://github.com/rafiatultalip/G7-IIB-AS3/pull/NUMBER) (`fix/home-route`)
- [#9 Add README](https://github.com/rafiatultalip/G7-IIB-AS3/pull/NUMBER) (`docs/readme`)

## Release

**v1.0** is the initial release.

```powershell
git tag -a v1.0 -m "Initial release"
git push origin v1.0
```
## Individual Reflections

### Rafiatul
My part was setting up Laravel Herd, creating the GitHub repository, and building the website's Home page in VS Code, and I opened and merged several pull requests for the setup, the Home page, the footer and the route fix. I learned that every change has to go through a pull request that a teammate reviews and approves before it is merged into `main`, and that I have to troubleshoot carefully when something breaks, such as a rejected push or a missing route. One challenge our team overcame was a merge conflict in `routes/web.php`, when the About and Contact pages both added routes, and we resolved it by keeping both routes and then fixed the Home route that went missing afterwards.
main

### Damia
I built the About page, created my own branch, and opened a pull request so it could be reviewed and merged into main. When my About page and the Contact page both added routes in routes/web.php, it caused a merge conflict, and I helped resolve it by keeping both routes. I learned that Git collaboration only works smoothly when everyone works on their own branch and every change goes through a pull request, because direct edits to main are blocked and a teammate has to review the change first. I also learned that merge conflicts are normal when two people edit the same file, and that the fix is to read both versions carefully and keep the correct code from each. One challenge our team overcame was that we could not open the website at first. We troubleshot it together, checking the project folder name, the HTTPS setting in Herd, and the routes, until the site loaded at https://group7.test with the padlock showing.

### Shifa 
My main contribution to the project was developing the Contacts page using Visual Studio Code (VS Code), where I coded and personalised the page to match our website’s design. I then pushed my changes to GitHub and created a pull request to merge my work. Throughout the project, I learned the importance of working in the correct branch instead of directly editing the main branch. I also gained experience in resolving merge conflicts. One challenge our team faced was getting the website to run without errors. We overcame this by troubleshooting together and using AI to identify and resolve the issues.


