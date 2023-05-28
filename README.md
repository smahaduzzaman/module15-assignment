# Assignment: Laravel Concepts Assessment

## Author:
- Name: S M Ahaduzzaman
- Email: smahaduzzaman96@gmail.com
- Phone: 01729-972223

# Instructions:

Welcome to the Laravel Concepts Assessment! In this coding assignment, you will demonstrate your understanding and proficiency in various Laravel concepts and best practices. Follow the instructions provided for each task and complete them using the Laravel framework.

## Task 1: Request Validation

Your first task is to implement request validation for a registration form. The form should contain the following fields: name, email, and password. You need to validate the following rules for each field:

name: required, string, minimum length 2.
email: required, valid email format.
password: required, string, minimum length 8.
Ensure that you follow Laravel's best practices for request validation.

## Task 2: Request Redirect

For the second task, create a route "/home" that redirects to "/dashboard" using a 302 redirect. Implement this redirection in your Laravel application.

Task 3: Global Middleware

In the third task, you need to create a global middleware that logs the request method and URL for every incoming request. Make sure to log this information to the Laravel log file. Implement the middleware following Laravel's guidelines.

## Task 4: Route Middleware

For the fourth task, create a route group for authenticated users only. This group should include routes for "/profile" and "/settings". Apply a middleware called AuthMiddleware to the route group to ensure that only authenticated users can access these routes. Implement this route group and middleware configuration in your Laravel application.

## Task 5: Controller

In the fifth task, you will create a controller called ProductController that handles CRUD operations for a resource called Product. Implement the following methods in the ProductController:

index(): Display a list of all products.
create(): Display the form to create a new product.
store(): Store a newly created product.
edit($id): Display the form to edit an existing product.
update($id): Update the specified product.
destroy($id): Delete the specified product.
Implement these methods according to Laravel's controller conventions and best practices.

## Task 6: Single Action Controller

For the sixth task, create a single action controller called ContactController that handles a contact form submission. Implement the __invoke() method in the ContactController to process the form submission and send an email to a predefined address with the submitted data. Use Laravel's mailing functionality for this task.

## Task 7: Resource Controller

In the seventh task, create a resource controller called PostController that handles CRUD operations for a resource called Post. Ensure that the controller provides the necessary methods for the resourceful routing conventions in Laravel. Follow Laravel's conventions for resource controllers.

## Task 8: Blade Template Engine

For the final task, create a Blade view called welcome.blade.php. This view should include a navigation bar and a section displaying the text "Welcome to Laravel!". Implement this Blade view using Laravel's Blade template engine.

## Submission:
- GitHub: https://github.com/smahaduzzaman/module15-assignment
