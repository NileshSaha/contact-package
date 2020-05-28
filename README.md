# Contact Us Form Package

[![Issues](https://img.shields.io/github/issues/NileshSaha/contact-package?style=flat-square)](https://github.com/NileshSaha/contact-package/issues)
[![Forks](https://img.shields.io/github/stars/NileshSaha/contact-package?style=flat-square)](https://github.com/NileshSaha/contact-package/stargazers)

###This will send email to admin and save contact query in database

This package will send mail to the admin and save the users message to the database.

## Installing ContactUS Package

The recommended way to install this package is through
[Composer](https://getcomposer.org/).

```bash
composer require nilesh_saha/contact
```
## Steps

- php artisan vendor:publish
  - Go to the main config folder you can see the contactForm.php set the send_email_to.
  - Set up your mail configuration in .env file
  - Set up your database
- php artisan migrate
- http://127.0.0.1:8000/contact (Web link for access the view page)
- Note:-You can update the view files and email template




Congratulation 😉

That's It! You're ready with your contact us setup.
