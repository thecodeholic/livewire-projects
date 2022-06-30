# Livewire projects for beginners

## Installation
1. Clone the project
2. Go to the project root directory and run `composer install` and `npm install`
3. Create `.env` file and copy content from `.env.example`
4. Run `php artisan key:generate --ansi` from terminal
5. Create database file `database/database.sqlite`
6. Run migrations by executing `php artisan migrate`
7. Start the project by running `php artisan serve`
8. Start the vite server (for serving css and js files) by running `npm run dev`

------
### Project #0 - Simple Counter
A single counter number with + and - buttons to increase or decrease the number. Simplest example how you can create dynamic page without writing JavaScript.
<br>
<a href="https://imgur.com/Pn2Wy91"><img src="https://i.imgur.com/Pn2Wy91.png" title="source: imgur.com" /></a>
<br>
<a href="https://imgur.com/9oZn9hP"><img src="https://i.imgur.com/9oZn9hP.png" title="source: imgur.com" /></a>

### Project #1 - Calculator
Very simple Calculator with with +, -, *, /, % operations. It has two inputs and one dropdown for operation and = button to calculate result.
<br>
<a href="https://imgur.com/Jq4OhdQ"><img src="https://i.imgur.com/Jq4OhdQ.png" title="source: imgur.com" /></a>
<br>
<a href="https://imgur.com/eYgcOR7"><img src="https://i.imgur.com/eYgcOR7.png" title="source: imgur.com" /></a>

### Project #2 - Simple todo list
Application made quantillion times. In this case it is made with livewire and Eloquent model. The data is saved, updated and deleted from the database.
<br>
<a href="https://imgur.com/1QEnRvC"><img src="https://i.imgur.com/1QEnRvC.png" title="source: imgur.com" /></a>

### Project #3 - Cascading dropdown
Cascading dropdown for continents and countries, you choose continent and countries are filtered based on it. Loading indicator is displayed while countries are loading
<br>
<a href="https://imgur.com/Zhh9fS0"><img src="https://i.imgur.com/Zhh9fS0.png" title="source: imgur.com" /></a>
<a href="https://imgur.com/eDR3UMR"><img src="https://i.imgur.com/eDR3UMR.png" title="source: imgur.com" /></a>
<a href="https://imgur.com/YZoYJBx"><img src="https://i.imgur.com/YZoYJBx.png" title="source: imgur.com" /></a>

### Project #4 - Product search and pagination
We have products table with multiple columns and pagination links and search input field. The data comes from the database and search keyword is saved in the URL. So when you refresh the page the content is filtered.
<br>
<a href="https://imgur.com/HqHVSpU"><img src="https://i.imgur.com/HqHVSpU.png" title="source: imgur.com" /></a>
<br>
<a href="https://imgur.com/et7kJhl"><img src="https://i.imgur.com/et7kJhl.png" title="source: imgur.com" /></a>

### Project #5 - Image Upload
 - Possibility to upload multiple images. 
 - Have preview before submitting. 
 - Images are validated on submit.
 - Images are saved on local file system
 - All uploaded images are displayed even after page reload
<br> 
<a href="https://imgur.com/Z1WuXgE"><img src="https://i.imgur.com/Z1WuXgE.png" title="source: imgur.com" /></a>


### Project #6 - Registration form validation
Very simple registration form with the following fields: 
 - customer role (radio list with two options: customer, vendor), 
 - first_name
 - last_name
 - email
 - password
 - company_name
 - vat_number

company_name and vat_number fields are only displayed and are required if role is **vendor**.
When you submit the form validation messages are displayed. As soon as you type in the inputs realtime validation happens and error messages are updated or hidden.
Every input has debounce on validation so that too many ajax requests are not sent. <br>
When the validation passes, session flash message is displayed.

<br>
<a href="https://imgur.com/Qku0EXj"><img src="https://i.imgur.com/Qku0EXj.png" title="source: imgur.com" /></a>
<br>
<a href="https://imgur.com/TLKM9YG"><img src="https://i.imgur.com/TLKM9YG.png" title="source: imgur.com" /></a>
<br>
<a href="https://imgur.com/n3JHqKt"><img src="https://i.imgur.com/n3JHqKt.png" title="source: imgur.com" /></a>
<br>
<a href="https://imgur.com/S22AX3d"><img src="https://i.imgur.com/S22AX3d.png" title="source: imgur.com" /></a>
