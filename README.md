# Redirect URL (URI)

Add this to manage custom redirects.

## Example Useage

Import the redirect.sql file into your database.  Then in your file...

```php
$redirect = new redirect($crud, 'redirect', 'http://justyourdomain.com');
```

### Function parameter explination

#### First

This is your database connection.  I use my "[C.R.U.D. wrapper](https://github.com/AndrewChamp/crud-mysql-wrapper)" I created.  You could modify the class to use anything you like.


#### Second

The name of the redirect table.


#### Third

This is just the URI of your domain.  If it's secure then use 'https://yourdomain.com'.  Don't add a backslash ('/') at the end of this.