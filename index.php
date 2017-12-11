<?php require_once $_SERVER[ 'DOCUMENT_ROOT' ] . '/bitrix/modules/main/include/prolog.php';


$group_id 	= 1;
$user_id 	= CUSER::GetID();

if( !in_array( $group_id, CUser::GetUserGroup( $user_id) ) )
	LocalRedirect( '/' );
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Mobile App Documentation</title>
<link rel="stylesheet" href="https://stackedit.io/res-min/themes/base.css" />
<script type="text/javascript" src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS_HTML"></script>
</head>
<body><div class="container"><h1 id="bx-mobile-api-documentation">BX Mobile API Documentation</h1>



<h2 id="operations">Operations</h2>

<ol>
<li><a href="#product-listing">Product listing</a></li>
<li><a href="#product-details">Product details</a></li>
<li><a href="#product-reviews">Product reviews</a></li>
<li><a href="#shippings">Shippings</a></li>
<li><a href="#locations-list">locations list</a></li>
<li><a href="#validate-user">Validate User</a></li>
<li><a href="#login">Login</a></li>
<li><a href="#logout">logout</a></li>
<li><a href="#register">Register</a></li>
<li><a href="#authorize">Authorize</a></li>
<li><a href="#orders-list">Orders list</a></li>
<li><a href="#order-statuses-list">Order Statuses list</a></li>
<li><a href="#addresses-list">Addresses List</a></li>
<li><a href="#update-address">Update Address</a></li>
<li><a href="#add-address">Add Address</a></li>
<li><a href="#get-address-fields">Get Address Fields</a></li>
<li><a href="#delete-address">Delete Address</a></li>
<li><a href="#mark-address-as-primary">Mark Address as Primary</a></li>
<li><a href="#get-profile-details">Get Profile Details</a></li>
<li><a href="#update-profile-details">Update Profile Details</a></li>
<li><a href="#get-category-filters">Get Category Filters</a></li>
<li><a href="#apply-filters">Apply Filters</a></li>
<li><a href="#change-password">Change Password</a></li>
<li><a href="#user-dashboard">User Dashboard</a></li>
<li><a href="#add-to-cart">Add to Cart</a></li>
<li><a href="#view-user-cart">View User Cart</a></li>
<li><a href="#update-cart-quantity">Update Cart Quantity</a></li>
<li><a href="#remove-from-cart">Remove from Cart</a></li>
<li><a href="#add-user-profile-picture">Add User Profile Picture</a></li>
<li><a href="#remove-user-profile-picture">Remove user profile picture</a></li>
<li><a href="#get-order-summary">Get Order Summary</a></li>
<li><a href="#place-order">Place Order</a></li>
<li><a href="#update-payment-method">Update Payment Method</a></li>
<li><a href="#validate-user">Validate User</a></li>
<li><a href="#send-verification-sms">Send Verification SMS</a></li>
<li><a href="#resend-verification-sms">Resend Verification SMS</a></li>
<li><a href="#verify-sms-code">Verify SMS code</a></li>
<li><a href="#offers-list">Offers list</a></li>
<li><a href="#offer-inner-listing">Offer inner listing</a></li>
<li><a href="#reset-password">Reset Password</a></li>
<li><a href="#product-rating">Product Rating</a></li>
<li><a href="#bundle-detail">Bundle Detail</a></li>
<li><a href="#send-order-verification-sms">Send Order Verification SMS</a></li>
<li><a href="#verify-order-sms-code">Verify Order SMS code</a></li>
<li><a href="#resend-order-verification-sms">Resend Order Verification SMS</a></li>
<li><a href="#facebook-login">Facebook login</a></li>
<li><a href="#track-order">Track Order</a></li>
<li><a href="#notifications">Notifications</a></li>
</ol>

<hr>



<h3 id="product-listing">Product listing</h3>



<h4 id="url">URL</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/products/?category_id={CATEGORY_ID}</code></pre>



<h4 id="method">Method</h4>



<pre class="prettyprint"><code class=" hljs vbnet"><span class="hljs-keyword">GET</span></code></pre>



<h4 id="description">Description</h4>

<p>Pass category ID to get the list of products from different categories <br>
pagination parameter is ‘page’. for the first page, keep it empty and for second onward pages.</p>



<h4 id="sample-request">Sample Request</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/products/?category_id=<span class="hljs-number">582</span>&amp;page=<span class="hljs-number">2</span>
</code></pre>

<hr>



<h3 id="product-details">Product details</h3>



<h4 id="url-1">URL</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/products/?product_id={PRODUCT_ID}</code></pre>



<h4 id="method-1">Method</h4>



<pre class="prettyprint"><code class=" hljs vbnet"><span class="hljs-keyword">GET</span></code></pre>



<h4 id="description-1">Description</h4>

<p>Pass product id as request parameters.</p>

<p>Product details will return following: <br>
1- Product overview  <br>
2- Description <br>
3- Specification <br>
4- Properties <br>
5- Product Comments <br>
6- Shipping Information <br>
7- Product Varients <br>
8- Images <br>
9- Rating</p>



<h4 id="sample-request-1">Sample Request</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/products/?product_id=<span class="hljs-number">3653</span></code></pre>

<hr>



<h3 id="product-reviews">Product reviews</h3>



<h4 id="url-2">URL</h4>



<pre class="prettyprint"><code class=" hljs mathematica">http://146.148.124.180/api/reviews/?id=<span class="hljs-list">{ELEMENT_ID}</span>&amp;mode=<span class="hljs-list">{REVIEW_MODE}</span>&amp;page=<span class="hljs-list">{PAGE_NUMBER}</span></code></pre>



<h4 id="method-2">Method</h4>



<pre class="prettyprint"><code class=" hljs vbnet"><span class="hljs-keyword">GET</span></code></pre>



<h4 id="description-2">Description</h4>

<p>Reviews API will be same for product, user, and store reviews. <br>
product id to be replaced with {ELEMENT_ID} <br>
‘product’ to be replaced with {MODE} <br>
desired page to be replaced with {PAGE_NUMBER}</p>



<h4 id="sample-request-2">Sample Request</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/reviews/?id=<span class="hljs-number">3656</span>&amp;mode=product&amp;page=<span class="hljs-number">3</span></code></pre>

<hr>



<h3 id="shippings">Shippings</h3>



<h4 id="url-3">URL</h4>



<pre class="prettyprint"><code class=" hljs mathematica">http://146.148.124.180/api/shippings/?product_id=<span class="hljs-list">{PRODUCT_ID}</span>&amp;quantity=<span class="hljs-list">{QUANTITY}</span>&amp;location_id=<span class="hljs-list">{LOCATION_ID}</span></code></pre>



<h4 id="method-3">Method</h4>



<pre class="prettyprint"><code class=" hljs vbnet"><span class="hljs-keyword">GET</span></code></pre>



<h4 id="description-3">Description</h4>

<p>To calculate the shipping cost of different variants following API will be used, it will not consider the current cart items. <br>
PRODUCT_ID and LOCATION_ID is madatory while QUANTITY is optional (it will consider 1 by default).</p>



<h4 id="sample-request-3">Sample Request</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/shippings/?product_id=<span class="hljs-number">199525</span>&amp;quantity=<span class="hljs-number">1</span>&amp;location_id=<span class="hljs-number">4001</span></code></pre>

<hr>



<h3 id="locations-list">locations list</h3>



<h4 id="url-4">URL</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/locations/</code></pre>



<h4 id="method-4">Method</h4>



<pre class="prettyprint"><code class=" hljs vbnet"><span class="hljs-keyword">GET</span></code></pre>



<h4 id="description-4">Description</h4>

<p>Returns Three keys  <br>
1- list of countries. <br>
2- list of cities according to countries. <br>
3- list of areas according to city and country.</p>



<h4 id="sample-request-4">Sample Request</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/locations/</code></pre>

<hr>



<h3 id="validate-user">Validate User</h3>



<h4 id="url-5">URL</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/user/?mode=validate&amp;input={USERNAME_OR_EMAIL}</code></pre>



<h4 id="method-5">Method</h4>



<pre class="prettyprint"><code class=" hljs vbnet"><span class="hljs-keyword">GET</span></code></pre>



<h4 id="description-5">Description</h4>

<p>Input can have username or email. if no user exists with provided input then 204 status will be returned. <br>
if input is email then error key will contain field as email otherwise login. <br>
so that field name can be used to control the front-end logic.</p>



<h5 id="example-1">Example 1:</h5>

<p>If user enters username which doesn’t exist, then text on front end should be ‘Enter Email’ instead of ‘Enter username/Email’, placeholder value should also be changed accordingly and probably input validations logic may also effect.</p>

<p>General validation Error such as empty value error will use ‘INPUT’ as a value of field.</p>



<h5 id="example-2">Example 2:</h5>

<p>if user enters username or email which exists then 409 will be returned from the server. Error message will be using ‘INPUT’ as field.</p>

<p>Status Codes: <br>
204 = No user exists with provided email <br>
400 = Input error <br>
409 = User already exists with provided email / username</p>



<h4 id="sample-request-5">Sample Request</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/user/?mode=login&amp;email={PUT_YOUR_USERNAME_HERE}&amp;password={PUT_YOUR_PASSWORD_HERE}</code></pre>

<hr>



<h3 id="login">Login</h3>



<h4 id="url-6">URL</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/user/?mode=login&amp;input={USERNAME_OR_EMAIL}&amp;password={PASSWORD}</code></pre>



<h4 id="method-6">Method</h4>



<pre class="prettyprint"><code class=" hljs vbnet"><span class="hljs-keyword">GET</span></code></pre>



<h4 id="description-6">Description</h4>

<p>To login in to the system, before accessing any user specific resources, user must required to be logged in to the system.</p>

<p>API Can accept both email and username, error in body will use field ‘input’ to error messages. <br>
JWT access token will be returned which must be used in header for authorised requests.</p>

<p>Status Codes: <br>
200 = login success <br>
400 = Input error <br>
404 = No user found with provided email/username and password</p>



<h4 id="sample-request-6">Sample Request</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/user/?mode=login&amp;input={PUT_YOUR_USERNAME_OR_EMAIL_HERE}&amp;password={PUT_YOUR_PASSWORD_HERE}</code></pre>

<hr>



<h3 id="logout">Logout</h3>



<h4 id="url-7">URL</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/user/?mode=logout

<span class="hljs-label">HEADER:</span>
<span class="hljs-label">Authorization:</span>{LOGIN_ACCESS_TOKEN}</code></pre>



<h4 id="method-7">Method</h4>



<pre class="prettyprint"><code class=" hljs vbnet"><span class="hljs-keyword">GET</span></code></pre>



<h4 id="description-7">Description</h4>

<p>To Logout of the system, Above API call will be used and user login token (which was received in login response). must be provided in header.</p>

<p>This function will void the already existing login token, and user will be no more allowed to access authorized resources.</p>



<h4 id="sample-request-7">Sample Request</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/user/?mode=logout

<span class="hljs-label">HEADER:</span>
<span class="hljs-label">Authorization:</span>{YOUR_LOGIN_ACCESS_TOKEN}</code></pre>

<hr>



<h3 id="register">Register</h3>



<h4 id="url-8">URL</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/user/?mode=register</code></pre>



<h4 id="method-8">Method</h4>



<pre class="prettyprint"><code class=" hljs ">POST</code></pre>



<h4 id="description-8">Description</h4>

<p>Registers &amp; logs user in the system. <br>
following fields are required in form-fields: <br>
1- email <br>
2- password <br>
3- confirm password <br>
4- phone</p>

<p>Status Codes: <br>
201 = register success <br>
400 = Input error <br>
409 = User Already Exists</p>



<h4 id="sample-request-8">Sample Request</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/user/?mode=register

<span class="hljs-label">BODY:</span>
email=test%<span class="hljs-number">40</span>test<span class="hljs-preprocessor">.com</span>&amp;password=<span class="hljs-number">123123</span>&amp;cpassword=<span class="hljs-number">123123</span>&amp;phone=<span class="hljs-number">971526800224</span></code></pre>

<hr>



<h3 id="authorize">Authorize</h3>



<h4 id="url-9">URL</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/user/?mode=authorize

<span class="hljs-label">HEADER:</span>
<span class="hljs-label">Authorization:</span> {LOGIN_ACCESS_TOKEN}</code></pre>



<h4 id="method-9">Method</h4>



<pre class="prettyprint"><code class=" hljs ">ANY</code></pre>



<h4 id="description-9">Description</h4>

<p>Check whether user is logged in the system or not. <br>
return error: true if not logged in, and return success message without errors if token is valid</p>



<h4 id="sample-request-9">Sample Request</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/user/?mode=authorize

<span class="hljs-label">HEADER:</span>
<span class="hljs-label">Authorization:</span> <span class="hljs-number">9</span>d47a1ca65016a4bedfed17ca6e7c0c6</code></pre>

<hr>



<h3 id="orders-list">Orders List</h3>



<h4 id="url-10">URL</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/orders/

<span class="hljs-label">HEADER:</span>
<span class="hljs-label">Authorization:</span>{LOGIN_ACCESS_TOKEN}</code></pre>



<h4 id="method-10">Method</h4>



<pre class="prettyprint"><code class=" hljs vbnet"><span class="hljs-keyword">GET</span></code></pre>



<h4 id="description-10">Description</h4>

<p>Get list of all orders of specific user, this call returns order details along with cart.</p>

<p>To paginate and filter the order of particular user, Use below information in query string</p>



<h5 id="pagination">PAGINATION:</h5>

<ol>
<li>page={PAGE_NUMBER}</li>
</ol>



<h5 id="filters">FILTERS:</h5>

<ol>
<li>filter_status= {STATUS_CODE}</li>
<li>filter_date_from={DATE_OR_DATE_TIME}</li>
<li><p>filter_date_to={DATE_OR_DATE_TIME}</p>

<ul><li>Dates must be mentioned in ( dd.mm.yyyy hh:ii:ss ), date is mandatory when used time in optional.</li></ul></li>
</ol>



<h4 id="sample-request-10">Sample Request</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/orders/?page=<span class="hljs-number">2</span>&amp;filter_status=<span class="hljs-built_in">Z</span>&amp;filter_date_from=<span class="hljs-number">28.12</span><span class="hljs-number">.2015</span> <span class="hljs-number">10</span>:<span class="hljs-number">40</span>:<span class="hljs-number">38</span>&amp;filter_date_to=<span class="hljs-number">28.12</span><span class="hljs-number">.2015</span>

<span class="hljs-label">HEADER:</span>
<span class="hljs-label">Authorization:</span>c884e57ae0491c7722343e6d24056531</code></pre>

<hr>



<h3 id="order-statuses-list">Order statuses List</h3>



<h4 id="url-11">URL</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/order-statuses/</code></pre>



<h4 id="method-11">Method</h4>



<pre class="prettyprint"><code class=" hljs vbnet"><span class="hljs-keyword">GET</span></code></pre>



<h4 id="description-11">Description</h4>

<p>Get list of all orders statuses, this will mainly be used to send filters of orders call to API.</p>



<h4 id="sample-request-11">Sample Request</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/order-statuses/</code></pre>

<hr>



<h3 id="addresses-list">Addresses List</h3>



<h4 id="url-12">URL</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/addresses/?page={PAGE_NUMBER}

<span class="hljs-label">HEADER:</span>
<span class="hljs-label">Authorization:</span>{LOGIN_ACCESS_TOKEN}</code></pre>



<h4 id="method-12">Method</h4>



<pre class="prettyprint"><code class=" hljs vbnet"><span class="hljs-keyword">GET</span></code></pre>



<h4 id="description-12">Description</h4>

<p>Get list of all addresses, Address fields are in indexed array with the name ‘FIELDS’ .</p>



<h4 id="sample-request-12">Sample Request</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/addresses/

<span class="hljs-label">Authorization:</span> {LOGIN_ACCESS_TOKEN}</code></pre>

<hr>



<h3 id="update-address">Update Address</h3>



<h4 id="url-13">URL</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/addresses/?id={ADDRESS_ID}

<span class="hljs-label">HEADER:</span>
<span class="hljs-label">Authorization:</span> {LOGIN_ACCESS_TOKEN}</code></pre>



<h4 id="method-13">Method</h4>



<pre class="prettyprint"><code class=" hljs ">PUT</code></pre>



<h4 id="description-13">Description</h4>

<p>Update particular address in database. keys in request should be same as received in list response.</p>

<p>Example: <br>
if you receive following in response of list <br>
“ID”: “50” <br>
“NAME”: “Area” <br>
“CODE”: “LOCATION” <br>
“TYPE”: “LOCATION” <br>
“DESCRIPTION”: “Enter Area (Select other if area is not available, add details in address box)” <br>
“REQUIED”: “Y” <br>
“VALUE”: “3698”</p>

<p>and if you want to update location.</p>

<p>than request for update must have ‘50’ as key and AREA_ID as value.</p>

<p>both form fields or JSON raw data can be used to add the address.</p>



<h4 id="sample-request-13">Sample Request</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/addresses/?id=<span class="hljs-number">145186</span>

<span class="hljs-label">HEADER:</span>
<span class="hljs-label">Authorization:</span> {LOGIN_ACCESS_TOKEN}

<span class="hljs-label">DATA:</span>
{
    <span class="hljs-string">"78"</span> : <span class="hljs-string">"khalidumar03@gmail.com"</span>,
    <span class="hljs-string">"65"</span> : <span class="hljs-string">"khalid"</span>,
    <span class="hljs-string">"67"</span> : <span class="hljs-string">"asdasdad"</span>,
    <span class="hljs-string">"70"</span> : <span class="hljs-string">"21321321"</span>,
    <span class="hljs-string">"50"</span> : <span class="hljs-number">3699</span>
}</code></pre>

<hr>



<h3 id="add-address">Add Address</h3>



<h4 id="url-14">URL</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/addresses/

<span class="hljs-label">HEADER:</span>
<span class="hljs-label">Authorization:</span> {LOGIN_ACCESS_TOKEN}</code></pre>



<h4 id="method-14">Method</h4>



<pre class="prettyprint"><code class=" hljs ">POST</code></pre>



<h4 id="description-14">Description</h4>

<p>Add address into the system. if you want to keep the address data entry form dynamic then use ‘get fields’(#get-address-fields) call to get the fields which are used in address, what fields are required , what is type of field  what is description and many more.</p>

<p>both form fields or JSON raw data can be used to add the address.</p>



<h4 id="sample-request-14">Sample Request</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/addresses/

<span class="hljs-label">HEADER:</span>
<span class="hljs-label">Authorization:</span> {LOGIN_ACCESS_TOKEN}

<span class="hljs-label">DATA:</span>
{
    <span class="hljs-string">"78"</span> : <span class="hljs-string">"khalidumar03@gmail.com"</span>,
    <span class="hljs-string">"65"</span> : <span class="hljs-string">"khalid"</span>,
    <span class="hljs-string">"67"</span> : <span class="hljs-string">"asdasdad"</span>,
    <span class="hljs-string">"70"</span> : <span class="hljs-string">"21321321"</span>,
    <span class="hljs-string">"50"</span> : <span class="hljs-number">3699</span>
}</code></pre>

<hr>



<h3 id="get-address-fields">Get Address Fields</h3>



<h4 id="url-15">URL</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/addresses/?action=fields

<span class="hljs-label">HEADER:</span>
<span class="hljs-label">Authorization:</span> {LOGIN_ACCESS_TOKEN}</code></pre>



<h4 id="method-15">Method</h4>



<pre class="prettyprint"><code class=" hljs vbnet"><span class="hljs-keyword">GET</span></code></pre>



<h4 id="description-15">Description</h4>

<p>This API call will return the list of fields being used in system while adding the address, the fields have following information <br>
1- id <br>
2- name <br>
3- code <br>
4- description</p>



<h4 id="sample-request-15">Sample Request</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/addresses/?action=fields

<span class="hljs-label">HEADER:</span>
<span class="hljs-label">Authorization:</span> {LOGIN_ACCESS_TOKEN}</code></pre>

<hr>



<h3 id="delete-address">Delete Address</h3>



<h4 id="url-16">URL</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/addresses/?id={ADDRESS_ID}

<span class="hljs-label">HEADER:</span>
<span class="hljs-label">Authorization:</span> {LOGIN_ACCESS_TOKEN}</code></pre>



<h4 id="method-16">Method</h4>



<pre class="prettyprint"><code class=" hljs ruleslanguage"><span class="hljs-keyword">DELETE</span></code></pre>



<h4 id="description-16">Description</h4>

<p>To delete the address and its values, Provided ID must be of authorized user.</p>



<h4 id="sample-request-16">Sample Request</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/addresses/?action=fields&amp;id=<span class="hljs-number">246498</span>

<span class="hljs-label">HEADER:</span>
<span class="hljs-label">Authorization:</span> {LOGIN_ACCESS_TOKEN}</code></pre>

<hr>



<h3 id="mark-address-as-primary">Mark Address as Primary</h3>



<h4 id="url-17">URL</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/addresses/?id={ADDRESS_ID}&amp;action=mark-primary

<span class="hljs-label">HEADER:</span>
<span class="hljs-label">Authorization:</span> {LOGIN_ACCESS_TOKEN}</code></pre>



<h4 id="method-17">Method</h4>



<pre class="prettyprint"><code class=" hljs ">PUT</code></pre>



<h4 id="description-17">Description</h4>

<p>To mark the address as primary and moving all other address of current user to non-primary.</p>



<h4 id="sample-request-17">Sample Request</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/addresses/?id=<span class="hljs-number">246503</span>&amp;action=mark-primary

<span class="hljs-label">HEADER:</span>
<span class="hljs-label">Authorization:</span> {LOGIN_ACCESS_TOKEN}</code></pre>

<hr>



<h3 id="get-profile-details">Get Profile Details</h3>



<h4 id="url-18">URL</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/profile/

<span class="hljs-label">HEADER:</span>
login-access-token:{LOGIN_ACCESS_TOKEN}</code></pre>



<h4 id="method-18">Method</h4>



<pre class="prettyprint"><code class=" hljs vbnet"><span class="hljs-keyword">GET</span></code></pre>



<h4 id="description-18">Description</h4>

<p>Get details of profile including name, email, dob, languages, interests and many more.</p>



<h4 id="sample-request-18">Sample Request</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/profile/

<span class="hljs-label">HEADER:</span>
<span class="hljs-label">Authorization:</span> {LOGIN_ACCESS_TOKEN}</code></pre>

<hr>



<h3 id="update-profile-details">Update Profile Details</h3>



<h4 id="url-19">URL</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/profile/

<span class="hljs-label">HEADER:</span>
<span class="hljs-label">Authorization:</span> {LOGIN_ACCESS_TOKEN}</code></pre>



<h4 id="method-19">Method</h4>



<pre class="prettyprint"><code class=" hljs ">POST</code></pre>



<h4 id="description-19">Description</h4>

<p>To update profile details; all existing details must be send in request, only email and dob validation is handled on server side, all other validations must be handled at front end.</p>

<p>Following fields must be sent for update request: <br>
1- NAME <br>
2- EMAIL <br>
3- LOGIN <br>
4- PERSONAL_GENDER <br>
5- date_ <br>
6- PERSONAL_STATE <br>
7- PERSONAL_LANGUAGES <br>
8- PERSONAL_INTERESTS</p>

<p>if records are successfully updated, then whole profile details will be returned again, if there is any error updating profile then error key will be true in response.</p>



<h4 id="sample-request-19">Sample Request</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/profile/

<span class="hljs-label">HEADER:</span>
<span class="hljs-label">Authorization:</span> {LOGIN_ACCESS_TOKEN}

<span class="hljs-label">DATA:</span>
{
    <span class="hljs-string">"NAME"</span>: <span class="hljs-string">"Khalid khan khattak"</span>,
    <span class="hljs-string">"EMAIL"</span>: <span class="hljs-string">"khalidumar03@gmail.com"</span>,
    <span class="hljs-string">"LOGIN"</span>: <span class="hljs-string">"khalidumar03"</span>,
    <span class="hljs-string">"PERSONAL_GENDER"</span>: <span class="hljs-string">"M"</span>,
    <span class="hljs-string">"date_"</span>: {
        <span class="hljs-string">"day"</span>: <span class="hljs-string">"15"</span>,
        <span class="hljs-string">"month"</span>: <span class="hljs-string">"07"</span>,
        <span class="hljs-string">"year"</span>: <span class="hljs-string">"1993"</span>
    },
    <span class="hljs-string">"PERSONAL_STATE"</span>: <span class="hljs-string">"United Arab Emirates"</span>,
    <span class="hljs-string">"PERSONAL_PAGER"</span>: [<span class="hljs-string">"English"</span>, <span class="hljs-string">"Afrikaans"</span>, <span class="hljs-string">"Pashto"</span>],
    <span class="hljs-string">"PERSONAL_NOTES"</span>: [<span class="hljs-string">"582"</span>, <span class="hljs-string">"999"</span>],
    <span class="hljs-string">"save"</span>: <span class="hljs-string">"Save"</span>
}</code></pre>

<hr>



<h3 id="get-category-filters">Get Category Filters</h3>



<h4 id="url-20">URL</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/filters/?category_id={CATEGORY_ID}</code></pre>



<h4 id="method-20">Method</h4>



<pre class="prettyprint"><code class=" hljs vbnet"><span class="hljs-keyword">GET</span></code></pre>



<h4 id="description-20">Description</h4>

<p>Return list of filters related to category, every filter has title ( would be used to show in front-end ) key ( would be used as key in query string ), value( would be used as value in query string  ). sort will be used to sort filters in list. <br>
CHECKED : Y/N will indicate whether filter is checked or not.</p>



<h4 id="sample-request-20">Sample Request</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/filters/?category_id=<span class="hljs-number">582</span></code></pre>

<hr>



<h3 id="apply-filters">Apply Filters</h3>



<h4 id="url-21">URL</h4>



<pre class="prettyprint"><code class=" hljs mathematica">http://146.148.124.180/api/products/?category_id=<span class="hljs-list">{CATEGORY_ID}</span>&amp;<span class="hljs-list">{FILTER_KEY}</span>=<span class="hljs-list">{FILTER_VALUE1}</span>,<span class="hljs-list">{FILTER_VALUE2}</span>&amp;set-filter=Y</code></pre>



<h4 id="method-21">Method</h4>



<pre class="prettyprint"><code class=" hljs vbnet"><span class="hljs-keyword">GET</span></code></pre>



<h4 id="description-21">Description</h4>

<p>Filters returned in filter list API will be used in this API call. multiple filters will be separated with comma under same key.</p>

<p>Price filters: <br>
min-price={PRICE_VALUE} <br>
max-price={PRICE_VALUE}</p>

<p>Keywords filter: <br>
keywords={KEYWORDS}</p>

<p>other Filters: <br>
{KEY}={VALUE1},{VALUE2}</p>

<p>pagination: <br>
page={PAGE_NUMBER}</p>



<h4 id="sample-request-21">Sample Request</h4>



<pre class="prettyprint"><code class=" hljs livecodeserver"><span class="hljs-keyword">http</span>://146.148.124.180/api/products/?category_id=<span class="hljs-number">582</span>&amp;keywords=&amp;brand=apple&amp;<span class="hljs-built_in">min</span>-price=<span class="hljs-number">100</span>&amp;<span class="hljs-built_in">max</span>-price=<span class="hljs-number">450</span>&amp;<span class="hljs-built_in">set</span>-<span class="hljs-built_in">filter</span>=Y</code></pre>

<hr>



<h3 id="change-password">Change Password</h3>



<h4 id="url-22">URL</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/user/?mode=change-password

<span class="hljs-label">HEADER:</span>
<span class="hljs-label">Authorization:</span> {LOGIN_ACCESS_TOKEN}</code></pre>



<h4 id="method-22">Method</h4>



<pre class="prettyprint"><code class=" hljs ">PUT</code></pre>



<h4 id="description-22">Description</h4>

<p>To change password, request must have following fields. <br>
VALIDATIONS: NEW_PWD and RE_NEW_PWD are validate from server end.</p>

<p>Following fields must be sent for update request: <br>
1- NEW_PWD <br>
2- RE_NEW_PWD</p>

<p>If password has been updated, an email will be sent to user.</p>



<h4 id="sample-request-22">Sample Request</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/user/?mode=change-password

<span class="hljs-label">HEADER:</span>
<span class="hljs-label">Authorization:</span> {LOGIN_ACCESS_TOKEN}

<span class="hljs-label">DATA:</span>
{
    <span class="hljs-string">"NEW_PWD"</span>:<span class="hljs-string">"123456"</span>,
    <span class="hljs-string">"RE_NEW_PWD"</span>:<span class="hljs-string">"123456"</span>
    <span class="hljs-string">"user_id"</span>: <span class="hljs-string">"452544"</span>
}</code></pre>

<hr>



<h3 id="user-dashboard">User Dashboard</h3>



<h4 id="url-23">URL</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/user-dashboard/

<span class="hljs-label">HEADER:</span>
<span class="hljs-label">Authorization:</span> {LOGIN_ACCESS_TOKEN}</code></pre>



<h4 id="method-23">Method</h4>



<pre class="prettyprint"><code class=" hljs vbnet"><span class="hljs-keyword">GET</span></code></pre>



<h4 id="description-23">Description</h4>

<p>To get user dashboard with following details <br>
1 - FULL_NAME <br>
2 - LOCATION <br>
3 - ORDERS_COUNT <br>
4 - ADDRESSES_COUNT <br>
5 - PRIMARY_ADDRESS <br>
6 - USER PROFILE PICTURE</p>



<h4 id="sample-request-23">Sample Request</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/user-dashboard/

<span class="hljs-label">HEADER:</span>
<span class="hljs-label">Authorization:</span> {LOGIN_ACCESS_TOKEN}</code></pre>

<hr>



<h3 id="add-to-cart">Add to Cart</h3>



<h4 id="url-24">URL</h4>



<pre class="prettyprint"><code class=" hljs mathematica">https://146.148.124.180/api/cart/?SKU=<span class="hljs-list">{SKU_ID}</span>&amp;UID=<span class="hljs-list">{UID}</span>&amp;SSID=<span class="hljs-list">{SSID}</span>&amp;quantity=<span class="hljs-list">{QUANTITY}</span>

HEADER:
Authorization: <span class="hljs-list">{LOGIN_ACCESS_TOKEN}</span></code></pre>



<h4 id="method-24">Method</h4>



<pre class="prettyprint"><code class=" hljs ">POST</code></pre>



<h4 id="description-24">Description</h4>

<p>Adding the product to the cart will require following information in the request: <br>
1- USER_ID <br>
2- SKU <br>
3- UID <br>
4- SSID <br>
5- quantity</p>

<p>SKU, UID, and SSID are returned in product details API response. These are also attached with each variant in combinations array.</p>

<p>user must be authorised before adding item to the cart. response will contain whole cart.</p>



<h4 id="sample-request-24">Sample Request</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">https://146.148.124.180/api/cart/?SKU=<span class="hljs-number">3656</span>&amp;UID=<span class="hljs-number">16015699</span>de33c1bbf&amp;SSID=<span class="hljs-number">35</span>a3480d734278516dc54be0aa12809e

<span class="hljs-label">HEADER:</span>
<span class="hljs-label">Authorization:</span> {LOGIN_ACCESS_TOKEN}</code></pre>

<hr>



<h3 id="view-user-cart">View User Cart</h3>



<h4 id="url-25">URL</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">https://146.148.124.180/api/cart/?location={location_id}

<span class="hljs-label">HEADER:</span>
<span class="hljs-label">Authorization:</span> {LOGIN_ACCESS_TOKEN}</code></pre>



<h4 id="method-25">Method</h4>



<pre class="prettyprint"><code class=" hljs vbnet"><span class="hljs-keyword">GET</span></code></pre>



<h4 id="description-25">Description</h4>

<p>Response contains basket items and summary along with delivery cost information. <br>
if location id is passed in request parameters; delivery cost will be calculated if not then text message will be shown accordingly.</p>

<p>delivery cost will be ‘Free’ in case of 0 delivery cost.</p>

<p>‘UPDATED’ key in response array will contain list of item whose prices were changed according to previous user cart summary.</p>



<h4 id="sample-request-25">Sample Request</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">https://146.148.124.180/api/cart/

<span class="hljs-label">HEADER:</span>
<span class="hljs-label">Authorization:</span> {LOGIN_ACCESS_TOKEN}</code></pre>

<hr>



<h3 id="update-cart-quantity">Update Cart Quantity</h3>



<h4 id="url-26">URL</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">https://146.148.124.180/api/cart/

{
    <span class="hljs-string">"ACTION"</span>   : <span class="hljs-string">"UPDATE"</span>,
    <span class="hljs-string">"CID"</span>      : {CART_ID},
    <span class="hljs-string">"QUANTITY"</span> : {QUANTITY} 
}

<span class="hljs-label">HEADER:</span>
<span class="hljs-label">Authorization:</span> {LOGIN_ACCESS_TOKEN}</code></pre>



<h4 id="method-26">Method</h4>



<pre class="prettyprint"><code class=" hljs ">PUT</code></pre>



<h4 id="description-26">Description</h4>

<p>This call will be used to update the item quantity in cart and recalculate cart prices.</p>



<h4 id="sample-request-26">Sample Request</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">https://146.148.124.180/api/cart/

<span class="hljs-label">HEADER:</span>
<span class="hljs-label">Authorization:</span> {LOGIN_ACCESS_TOKEN}
Content-Type: application/json

<span class="hljs-label">DATA:</span>
{
    <span class="hljs-string">"ACTION"</span>   : <span class="hljs-string">"UPDATE"</span>,
    <span class="hljs-string">"CID"</span>      : <span class="hljs-number">3274849</span>,
    <span class="hljs-string">"QUANTITY"</span> : <span class="hljs-number">5</span>  
}</code></pre>

<hr>



<h3 id="remove-from-cart">Remove from Cart</h3>



<h4 id="url-27">URL</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">https://146.148.124.180/api/cart/

{
    <span class="hljs-string">"ACTION"</span>   : <span class="hljs-string">"REMOVE"</span>,
    <span class="hljs-string">"CID"</span>      : {CART_ID}
}

<span class="hljs-label">HEADER:</span>
<span class="hljs-label">Authorization:</span> {LOGIN_ACCESS_TOKEN}</code></pre>



<h4 id="method-27">Method</h4>



<pre class="prettyprint"><code class=" hljs ruleslanguage"><span class="hljs-keyword">DELETE</span></code></pre>



<h4 id="description-27">Description</h4>

<p>Deletes the item from cart and recalculate all prices.</p>



<h4 id="sample-request-27">Sample Request</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">https://146.148.124.180/api/cart/

<span class="hljs-label">HEADER:</span>
<span class="hljs-label">Authorization:</span> {LOGIN_ACCESS_TOKEN}
Content-Type: application/json

<span class="hljs-label">DATA:</span>
{
    <span class="hljs-string">"ACTION"</span>   : <span class="hljs-string">"REMOVE"</span>,
    <span class="hljs-string">"CID"</span>      : <span class="hljs-number">3274849</span>
}</code></pre>

<hr>



<h3 id="add-user-profile-picture">Add User Profile Picture</h3>



<h4 id="url-28">URL</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/user-profile-pic/

{
    <span class="hljs-string">"USER_IMAGE"</span>   : {BASE64_STRING}
}

<span class="hljs-label">HEADER:</span>
<span class="hljs-label">Authorization:</span> {LOGIN_ACCESS_TOKEN}</code></pre>



<h4 id="method-28">Method</h4>



<pre class="prettyprint"><code class=" hljs ">POST</code></pre>



<h4 id="description-28">Description</h4>

<p>To add user profile picture.</p>



<h4 id="sample-request-28">Sample Request</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/user-profile-pic/

<span class="hljs-label">HEADER:</span>
<span class="hljs-label">Authorization:</span> {LOGIN_ACCESS_TOKEN}

<span class="hljs-label">DATA:</span>
{
    <span class="hljs-string">"USER_IMAGE"</span>   : ae675a989d09809f9873987e87628763487...
}</code></pre>

<hr>



<h3 id="remove-user-profile-picture">Remove user profile picture</h3>



<h4 id="url-29">URL</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/user-profile-pic/

<span class="hljs-label">HEADER:</span>
<span class="hljs-label">Authorization:</span> {LOGIN_ACCESS_TOKEN}</code></pre>



<h4 id="method-29">Method</h4>



<pre class="prettyprint"><code class=" hljs ruleslanguage"><span class="hljs-keyword">DELETE</span></code></pre>



<h4 id="description-29">Description</h4>

<p>To remove user profile picture.</p>



<h4 id="sample-request-29">Sample Request</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/user-profile-pic/

<span class="hljs-label">HEADER:</span>
<span class="hljs-label">Authorization:</span> {LOGIN_ACCESS_TOKEN}</code></pre>

<hr>



<h3 id="get-order-summary">Get Order Summary</h3>



<h4 id="url-30">URL</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/checkout/?address_id={ADDRESS_ID}&amp;action=get-summary

<span class="hljs-label">HEADER:</span>
<span class="hljs-label">Authorization:</span> {LOGIN_ACCESS_TOKEN}</code></pre>



<h4 id="method-30">Method</h4>



<pre class="prettyprint"><code class=" hljs vbnet"><span class="hljs-keyword">GET</span></code></pre>



<h4 id="description-30">Description</h4>

<p>To get the summary of order with exact shipping cost and checking out of stock items. <br>
If no address has been passed in request then primary address will be automatically picked.</p>



<h4 id="sample-request-30">Sample Request</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/checkout/?address_id=<span class="hljs-number">123456</span>&amp;action=get-summary

<span class="hljs-label">HEADER:</span>
<span class="hljs-label">Authorization:</span> {LOGIN_ACCESS_TOKEN}</code></pre>

<hr>



<h3 id="place-order">Place Order</h3>



<h4 id="url-31">URL</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/checkout/?address_id={ADDRESS_ID}&amp;action=place-order

<span class="hljs-label">HEADER:</span>
<span class="hljs-label">Authorization:</span> {LOGIN_ACCESS_TOKEN}</code></pre>



<h4 id="method-31">Method</h4>



<pre class="prettyprint"><code class=" hljs ">POST</code></pre>



<h4 id="description-31">Description</h4>

<p>Place order with current cart. Order ID will be returned which should be saved locally for future transactions.</p>



<h4 id="sample-request-31">Sample Request</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/checkout/?address_id=<span class="hljs-number">123456</span>&amp;action=place-order
<span class="hljs-label">HEADER:</span>
<span class="hljs-label">Authorization:</span> {LOGIN_ACCESS_TOKEN}</code></pre>

<hr>



<h3 id="update-payment-method">Update Payment Method</h3>



<h4 id="url-32">URL</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/checkout/?order_id={ORDER_ID}&amp;pay_method_id={PAYMEN_METHOD_ID&amp;action=update-pay-method

<span class="hljs-label">HEADER:</span>
<span class="hljs-label">Authorization:</span> {LOGIN_ACCESS_TOKEN}</code></pre>



<h4 id="method-32">Method</h4>



<pre class="prettyprint"><code class=" hljs ">PUT</code></pre>



<h4 id="description-32">Description</h4>

<p>To update the payment method of currently placed order. <br>
If online payment then in response, parameters of payment merchant will be sent in response. if other payment system then it will be updated and order complete page data will be returned.</p>



<h4 id="sample-request-32">Sample Request</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/checkout/?order_id=<span class="hljs-number">404688215</span>&amp;pay_method_id=<span class="hljs-number">23</span>&amp;action=update-pay-method

<span class="hljs-label">HEADER:</span>
<span class="hljs-label">Authorization:</span> {LOGIN_ACCESS_TOKEN}</code></pre>

<hr>



<h3 id="send-verification-sms">Send Verification SMS</h3>



<h4 id="url-33">URL</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/user/?mode=send-verify-sms&amp;phone={PHONE_NUMBER}

<span class="hljs-label">HEADER:</span>
<span class="hljs-label">Authorization:</span> {LOGIN_ACCESS_TOKEN}</code></pre>



<h4 id="method-33">Method</h4>



<pre class="prettyprint"><code class=" hljs ">POST</code></pre>



<h4 id="description-33">Description</h4>

<p>if objective is to explicitly use this api, you have handle different statuses like. 400, 413, 403, 201 <br>
Same process is used when user is registered in system.</p>



<h4 id="sample-request-33">Sample Request</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/user/?mode=send-verify-sms&amp;phone=<span class="hljs-number">526800224</span>

<span class="hljs-label">HEADER:</span>
<span class="hljs-label">Authorization:</span> {LOGIN_ACCESS_TOKEN}</code></pre>

<hr>



<h3 id="resend-verification-sms">Resend Verification SMS</h3>



<h4 id="url-34">URL</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/user/?mode=resend-verify-sms

<span class="hljs-label">HEADER:</span>
<span class="hljs-label">Authorization:</span> {LOGIN_ACCESS_TOKEN}</code></pre>



<h4 id="method-34">Method</h4>



<pre class="prettyprint"><code class=" hljs ">POST</code></pre>



<h4 id="description-34">Description</h4>

<p>If one sms has been sent already and user didn’t receive message on his phone, then this api call will be used. <br>
phone number is not required in this api.</p>



<h4 id="sample-request-34">Sample Request</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/user/?mode=resend-verify-sms

<span class="hljs-label">HEADER:</span>
<span class="hljs-label">Authorization:</span> {LOGIN_ACCESS_TOKEN}</code></pre>

<hr>



<h3 id="verify-sms-code">Verify SMS code</h3>



<h4 id="url-35">URL</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/user/?mode=verify-sms-code&amp;code={CODE}

<span class="hljs-label">HEADER:</span>
<span class="hljs-label">Authorization:</span> {LOGIN_ACCESS_TOKEN}</code></pre>



<h4 id="method-35">Method</h4>



<pre class="prettyprint"><code class=" hljs vbnet"><span class="hljs-keyword">GET</span></code></pre>



<h4 id="description-35">Description</h4>

<p>To verify the code sent to user in sms</p>



<h4 id="sample-request-35">Sample Request</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/user/?mode=verify-sms-code&amp;code={CODE}

<span class="hljs-label">HEADER:</span>
<span class="hljs-label">Authorization:</span> {LOGIN_ACCESS_TOKEN}</code></pre>

<hr>



<h3 id="offers-list">Offers list</h3>



<h4 id="url-36">URL</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/offers-list/
</code></pre>



<h4 id="method-36">Method</h4>



<pre class="prettyprint"><code class=" hljs vbnet"><span class="hljs-keyword">GET</span></code></pre>



<h4 id="description-36">Description</h4>

<p>To get the list of different offers, each offer have configurations like web_view : Y/N, key, value, title and many more. the layout for each offer inner list page must be controller according to data returned in response, as layout is common for all offers.</p>



<h4 id="sample-request-36">Sample Request</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/offers-list/</code></pre>

<hr>



<h3 id="offer-inner-listing">Offer inner listing</h3>



<h4 id="url-37">URL</h4>



<pre class="prettyprint"><code class=" hljs haskell"><span class="hljs-title">http</span>://146.148.124.180/api/offers/?<span class="hljs-typedef"><span class="hljs-keyword">type</span>=<span class="hljs-container">{<span class="hljs-type">OFFER_TYPE</span>}</span>&amp;page=<span class="hljs-container">{<span class="hljs-type">PAGE_NUMBER</span>}</span>&amp;web_view=<span class="hljs-container">{<span class="hljs-type">Y</span>/<span class="hljs-type">N</span>}</span></span>
</code></pre>



<h4 id="method-37">Method</h4>



<pre class="prettyprint"><code class=" hljs vbnet"><span class="hljs-keyword">GET</span></code></pre>



<h4 id="description-37">Description</h4>

<p>Inner listing page of offer, this response can return either web view URL or data. <br>
page and web_view are optional.</p>



<h4 id="sample-request-37">Sample Request</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/offers/?type=weekly-best-sellers&amp;page=<span class="hljs-number">2</span>&amp;web-view=N</code></pre>

<hr>



<h3 id="reset-password">Reset Password</h3>



<h4 id="url-38">URL</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/user/?mode=send-reset-password</code></pre>



<h4 id="method-38">Method</h4>



<pre class="prettyprint"><code class=" hljs ">POST</code></pre>



<h4 id="description-38">Description</h4>

<p>To reset password, user need to send register email id. An email will sent to user with password change link.</p>



<h4 id="sample-request-38">Sample Request</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/user/?mode=send-reset-password

<span class="hljs-label">DATA:</span>
{
    <span class="hljs-string">"input"</span>   : <span class="hljs-string">"example@gmail.com"</span>
}</code></pre>

<hr>

<h3 id="product-rating">Product Rating</h3>



<h4 id="url-39">URL</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/rate/</code></pre>



<h4 id="method-39">Method</h4>



<pre class="prettyprint"><code class=" hljs ">POST</code></pre>



<h4 id="description-39">Description</h4>

<p>To rate the product, we need to provide following information in request.</p>



<h4 id="sample-request-39">Sample Request</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/rate/

<span class="hljs-label">DATA:</span>
{
    <span class="hljs-string">"PID"</span>:<span class="hljs-number">163640</span>,
    <span class="hljs-string">"IBLOCK"</span>:<span class="hljs-number">22</span>,
    <span class="hljs-string">"HASH"</span>:<span class="hljs-string">"8b31d90c46616ebabeb2bbb04e316981"</span>,
    <span class="hljs-string">"STARS"</span>:<span class="hljs-number">4</span>
}</code></pre>

<hr>



<h3 id="bundle-detail">Bundle Detail</h3>



<h4 id="url-40">URL</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/bundles/</code></pre>



<h4 id="method-40">Method</h4>



<pre class="prettyprint"><code class=" hljs mathematica"><span class="hljs-keyword">Get</span></code></pre>



<h4 id="description-40">Description</h4>

<p>To get details of bundles.</p>



<h4 id="sample-request-40">Sample Request</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/bundles/?id=<span class="hljs-number">618022</span></code></pre>

<hr>



<h3 id="send-order-verification-sms">Send Order Verification SMS</h3>



<h4 id="url-41">URL</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/checkout/?action=send-verify-sms&amp;phone={PHONE_NUMBER}

<span class="hljs-label">HEADER:</span>
<span class="hljs-label">Authorization:</span> {LOGIN_ACCESS_TOKEN}</code></pre>



<h4 id="method-41">Method</h4>



<pre class="prettyprint"><code class=" hljs ">POST</code></pre>



<h4 id="description-41">Description</h4>

<p>if objective is to explicitly use this api, you have handle different statuses like. 400, 413, 403, 201</p>



<h4 id="sample-request-41">Sample Request</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/checkout/?action=send-verify-sms&amp;phone=<span class="hljs-number">526800224</span>

<span class="hljs-label">HEADER:</span>
<span class="hljs-label">Authorization:</span> {LOGIN_ACCESS_TOKEN}</code></pre>

<hr>



<h3 id="verify-order-sms-code">Verify Order SMS code</h3>



<h4 id="url-42">URL</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/checkout/?action=verify-sms-code&amp;code={CODE}&amp;order_id={ORDER_ID}

<span class="hljs-label">HEADER:</span>
<span class="hljs-label">Authorization:</span> {LOGIN_ACCESS_TOKEN}</code></pre>



<h4 id="method-42">Method</h4>



<pre class="prettyprint"><code class=" hljs vbnet"><span class="hljs-keyword">GET</span></code></pre>



<h4 id="description-42">Description</h4>

<p>To verify the code sent to user in sms</p>



<h4 id="sample-request-42">Sample Request</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/checkout/?mode=verify-sms-code&amp;code=<span class="hljs-number">12345</span>&amp;order_id=<span class="hljs-number">9854875657</span>

<span class="hljs-label">HEADER:</span>
<span class="hljs-label">Authorization:</span> {LOGIN_ACCESS_TOKEN}</code></pre>

<hr>



<h3 id="resend-order-verification-sms">Resend Order Verification SMS</h3>



<h4 id="url-43">URL</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/checkout/?action=resend-verify-sms

<span class="hljs-label">HEADER:</span>
<span class="hljs-label">Authorization:</span> {LOGIN_ACCESS_TOKEN}</code></pre>



<h4 id="method-43">Method</h4>



<pre class="prettyprint"><code class=" hljs vbnet"><span class="hljs-keyword">GET</span></code></pre>



<h4 id="description-43">Description</h4>

<p>if objective is to explicitly use this api, you have handle different statuses like. 400, 413, 403, 201</p>



<h4 id="sample-request-43">Sample Request</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/checkout/?action=resend-verify-sms

<span class="hljs-label">HEADER:</span>
<span class="hljs-label">Authorization:</span> {LOGIN_ACCESS_TOKEN}</code></pre>

<hr>



<h3 id="facebook-login">Facebook Login</h3>



<h4 id="url-44">URL</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/user/mode=fb-login&amp;token={ACCESS_TOKEN}</code></pre>



<h4 id="method-44">Method</h4>



<pre class="prettyprint"><code class=" hljs vbnet"><span class="hljs-keyword">GET</span></code></pre>



<h4 id="description-44">Description</h4>

<p>To login or register via facebook.</p>

<p>Status Codes: <br>
200 = Successfully Logged in <br>
400 = Input error</p>



<h4 id="sample-request-44">Sample Request</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/user/mode=fb-login&amp;token={FACEBOOK_ACCESS_TOKEN}</code></pre>

<hr>



<h3 id="track-order">Track Order</h3>



<h4 id="url-45">URL</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/track-order/track_order={ORDER_NUMBER}</code></pre>



<h4 id="method-45">Method</h4>



<pre class="prettyprint"><code class=" hljs ">POST</code></pre>



<h4 id="description-45">Description</h4>

<p>To track the order.</p>



<h4 id="sample-request-45">Sample Request</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/track-order/?track_order={ORDER_NUMBER}</code></pre>

<hr>



<h3 id="notifications">Notifications</h3>



<h4 id="url-46">URL</h4>



<pre class="prettyprint"><code class=" hljs avrasm"><span class="hljs-label">http://146.148.124.180/api/notification/mode=send-text

<span class="hljs-label">HEADER:</span>
<span class="hljs-label">Authorization:</span> {LOGIN_ACCESS_TOKEN}</code></pre>



<h4 id="method-46">Method</h4>



<pre class="prettyprint"><code class=" hljs vbnet"><span class="hljs-keyword">GET</span></code></pre>



<h4 id="description-46">Description</h4>

<p>To send the notifications on mobile app users.  <br>
You need to send the following fields.</p>

<ol>
<li>title ( Title of the Notification)</li>
<li>body ( Text you want to send in the notification)</li>
</ol>

<p>Status Codes: <br>
200 = Successfully sent the messages <br>
400 = Input error  <br>
404 = No user found with provided email/username and password</p>



<h4 id="sample-request-46">Sample Request</h4>



<pre class="prettyprint"><code class=" hljs ruby"><span class="hljs-symbol">http:</span>/<span class="hljs-regexp">/mp.alifca.com/api</span><span class="hljs-regexp">/notification/mode</span>=send-text

<span class="hljs-constant">DATA</span><span class="hljs-symbol">:</span>
{
    <span class="hljs-string">"mode"</span><span class="hljs-symbol">:send-text</span>,
    <span class="hljs-string">"title"</span><span class="hljs-symbol">:awok</span>,
    <span class="hljs-string">"body"</span><span class="hljs-symbol">:<span class="hljs-string">"your text to send"</span></span>
}</code></pre></div></body>
</html>