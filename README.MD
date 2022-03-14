<a href="https://dev.family/?utm_source=github&utm_medium=junior-backend-exam&utm_campaign=readme"><img width="auto" center src="https://github.com/dev-family/junior-backend-exam/blob/main/logo.png" /></a>

# Task 1
The website of one of our old clients was hacked. After hacking, a strange red bar appeared on the site at the bottom of the page (https://imgur.com/gYWYQ0r). We don't have any sources left in the git, I can only give you an archive from the production (exam.tgz).

Task: to find and **remove** malicious code. In the response, specify the necessary actions to get rid of it.

Unpack the archive:

```shell
tar zxvf exam.tgz exam
```

# Task 2

There are two services: *app/Services/Loggers/{Foo,Bar}.php*. Each of them wants to log something, and each of them wants to log to their own file (*storage/logs/foo.log* for the Foo service, *storage/logs/bar.log* – for Bar). It is necessary to solve this problem without changing the services themselves, i.e. without changing the code in *app/Services/Loggers/{Foo,Bar}.php*.

There is a test prepared for a quick check of what was happening tests/Unit/LoggingTest.php, which can be run with the following command: ./vendor/bin/phpunit tests/Unit/LoggingTest.php . He has to work out.

# Task 3
There is a controller *app/Http/Controllers/ActionController.php* which dispatches the event.

You need to write the line `action fired from ip: $ip` to the logs, instead of $ip, your ip from the request should be added. The code cannot be changed in the controller.

To check, we use the command

```shell
php artisan serve # server will be accessible by url http://localhost:8000

```
The controller is registered in the routes `api.php`

# Task 4
Expanding task 3.

Now you need to write a line to the logs once a minute,
when there is an access from the same ip address.
If the method is called more often, then we write the `duplicate action from ip line in the logs: $ip`

The database cannot be used. It is still impossible to change the controller code.

# Task 5
There is a controller *app/Http/Controllers/ResponseController.php*

The controller returns the object *app/Services/ResponseClass/ResponseClass.php*

If you look http://localhost:8000/api/response then you will see the line. It is necessary, without changing the code of the service and controller, to give the json format:

```json
{
  "name": "Foo",
  "description": "Bar"
}
```

You can change the code only in the *Convert* trait and the *Response* interface.
