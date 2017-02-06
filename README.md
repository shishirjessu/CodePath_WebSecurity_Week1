# Project 1 - Globitek CMS

Time spent: **4** hours spent in total

## User Stories

The following **required** functionality is completed:

1. [x]  Required: Create a Users Table
  * [x]  Use the command line to connect to the database "globitek".
  * [x]  Define a table "users" with columns for:
    * [x]  id, first_name, last_name, email, username, created_at

2. [x]  Required: Create a Page with an HTML Form
  * [x]  In the project "globitek", locate the "public/register.php" page.
  * [x]  Add an HTML form
    * [x]  with text inputs: first_name, last_name, email, username
    * [x]  submits to: itself ("public/register.php")

3. [x]  Required: Detect when the form is submitted
  * [x]  If "/public/register.php" is loaded directly, it should display the form.
  * [x]  If the form was submitted, it should retrieve the form data.

4. [x]  Required: Validate form data:
  * [x]  Use the file "/private/validation_functions.php" as a library for the validation functions you use.
  * [x]  Validate the presence of all form values.
  * [x]  Validate that no values are longer than 255 characters.
  * [x]  Validate that first_name and last_name have at least 2 characters.
  * [x]  Validate that username has at least 8 characters.
  * [x]  Validate that email contains a "@".

5. [x]  Required: Display form errors if any validations fail.
  * [x]  Do not submit the data to the database.
  * [x]  Redisplay the form with the submitted values filled in.
  * [x]  Report all errors as a list above the form.
  * [x]  Test each field to ensure you get the expected errors.

6. [x]  Required: Submit successfully-validated form values to the database.
  * [x]  Write an SQL statement which will insert a new record into the globitek.users table using the submitted form values.
  * [x]  Do not forget to add the current date and time to "created_at".
  * [x]  Follow best practices regarding the query result and database connection.
  * [x]  Use the command line to connect to the database and check the records.

7. [x]  Required: Redirect the user to a confirmation page.
  * [x]  Locate the page "public/registration_success.php".
  * [x]  Redirect the user to the new page.

8. [x]  Required: Sanitize all dynamic output for HTML.

The following advanced user stories are optional:

* [x]  Bonus: Validate that form values contain only whitelisted characters.
  * [x]  first_name, last_name: letters, spaces, symbols: - , . '
  * [x]  username: letters, numbers, symbols: _
  * [x]  email: letters, numbers, symbols: _ @ .
  * [x]  Test each field to ensure you get the expected errors.

* [x]  Bonus: Validate the uniqueness of the username.

## Video Walkthrough

Here's a walkthrough of implemented user stories:

<img src='http://imgur.com/iq7JscL' title='Video Walkthrough' width='' alt='Video Walkthrough' />

GIF created with [LiceCap](http://www.cockos.com/licecap/).

## Notes

Describe any challenges encountered while building the app.

## License

    Copyright [2017] [Shishir Jessu]

    Licensed under the Apache License, Version 2.0 (the "License");
    you may not use this file except in compliance with the License.
    You may obtain a copy of the License at

        http://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing, software
    distributed under the License is distributed on an "AS IS" BASIS,
    WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
    See the License for the specific language governing permissions and
    limitations under the License.
