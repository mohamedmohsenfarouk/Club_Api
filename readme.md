## About Club API

We are a club that provides different sport sessions .  We want to develop a mobile app that allow users to book any session they would  like to attend and that is not fully booked. Also the user can browse for sessions based on sports and spots availability.
 Implement Api’s for the following 
 • List all sports the club provide.
 • List all session sorted by sport.
 • Get session based on specific sport. 
 • Get all sessions having available slots. 
 • Get sport name that have max no of attendees.
 • Book a session for a user.
 • Get user’s session sorted by booking time . 

## Several quick start options are available:
- Clone the repo: `git clone https://github.com/mohamedmohsenfarouk/Club_Api.git`
- Install with composer: `composer install`
- Run Migrations: `php artisan migrate`
- Run Seeds: `php artisan db:seed`

## Examples for Requestes of API
- List all sports the club provide.
`http://clubapi.local.com/api/sports`

- List all session sorted by sport . 
`http://clubapi.local.com/api/sessions

- Get session based on specific sport .
`http://clubapi.local.com/api/session/2`

- Get all sessions having available slots . 
`http://clubapi.local.com/api/available_slots`

- Get sport name that have max no of attendees .
`http://clubapi.local.com/api/max_attendees`

- Book a session for a user .
`http://clubapi.local.com/api/booking`
send data like this https://www.screencast.com/t/1wrs7jbnlTtA

- Get user’s session sorted by booking time .
`http://clubapi.local.com/api/user/5`
