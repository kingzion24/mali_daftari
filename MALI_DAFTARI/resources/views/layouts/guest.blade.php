<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('mali_daftari')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
      body 
{
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background: url('{{ asset('images/signupbackground.png') }}') no-repeat center center fixed;
    background-size: cover;
}

.auth-container
 {
    display: flex;
    background-color: rgba(255, 255, 255, 0.9);
    border-radius: 20px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
    width: 800px;
    height: 650px;
    overflow: hidden;
}

/* Left Section Styling */
.left-section {
    background-color: #000;
    color: white;
    width: 80%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 20px;
    text-align: center;
    
}

.left-section img.logo {
    width: 80px;
    margin-bottom: 20px;
}

.left-section h2 {
    font-size: 30px;
    margin-bottom: 20px;
}

.left-section p {
    font-size: 16px;
    margin-bottom: 10px;
}

.left-section a {
    color: #007bff;
    font-size: 16px;
    text-decoration: none;
    border: 2px solid white;
    padding: 10px 15px;
    border-radius: 20px;
    background-color: white;
    color: black;
}

/* Right Section (Form) Styling */
.right-section 
{
    width: 80%;
    padding: 20px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    overflow-y:auto; /* Enables vertical scrolling */
    max-height: 90vh; /* Ensures it doesn't exceed the viewport height */
}

.right-section h1 
{
    text-align: center;
    font-size: 28px;
    margin-bottom: 20px;
}


.form-group {
    margin-bottom: 10px;
    margin-top :20px;
}

.form-group input 
{
    width: 100%;
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 25px;
    box-sizing: border-box;
}

button {
    width: 80%;
    padding: 12px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 25px;
    font-size: 18px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}
select 
{
    width: 100%; /* Full width */
    padding: 10px; /* Padding for better spacing */
    border: 1px solid #ccc; /* Border color */
    border-radius: 5px; /* Rounded corners */
    background-color: #f9f9f9; /* Light background color */
    font-size: 16px; /* Font size */
    color: #333; /* Font color */
    appearance: none; /* Remove default styling */
    background-image: url('path/to/your/icon.png'); /* Optional: Custom arrow icon */
    background-repeat: no-repeat;
    background-position: right 10px center; /* Position for the icon */
    background-size: 15px; /* Size of the icon */
}

select:focus {
    border-color: #007bff; /* Change border color on focus */
    outline: none; /* Remove default outline */
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5); /* Optional shadow */
}



    </style>
</head>
<body>

    <div class="auth-container">
        @yield('content')
    </div>

</body>
</html>
