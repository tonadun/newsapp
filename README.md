<p align="center"><a href="https://nadunliyanage.com" target="_blank"><img src="https://nadunliyanage.com/newsapplogo.svg" width="400" alt="iNews Logo"></a></p>

## About iNews

iNews is a web application which is members only news application which build using Laravel Framework and Vue.JS.

Functionality and Approach:

- Simple Authentication via Innerta, Jetstream and Fortify.
- Build the application via Vite.
- UI templating via Tailwind CSS.
- Language support via i18n.
- Read json file via private storage to secure core data set.
- Use Resource to Filter records from Huge dataset in the JSON original file.
- Created a Service to Validate and filter with formatting.
- Tested Service functionality with different scenarios using PHPUnit Tests.
- Frontend uses vue.js to design UI components.
- API call via axios and implemented Lazy loading with the support of Suspense components to viually attract/indicate the user while loading data with placeholders.
- Tested the performance of the application loading time with laravel debugbar plugin.

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## How to Test it out

You can create new account via Register option or you can use by default seeded user account by using below credentials.

- User Name: test@example.com
- Password: 01470147


## Instructons

- git clone https://github.com/tonadun/newsapp.git
- npm install
- npm run build
- php artisan migrate
- php artisan serve


