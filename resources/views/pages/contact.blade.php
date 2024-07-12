<style>
    html, body {
    padding-top: 20px;
    weight:200px;
    background-color: #007bff;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #f5f5f5; /* Optional: Set a background color */
}


    .container {
    width: 600px;

    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 8px;
    background-color: #f9f9f9;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); w
    justify-content: center;

}

/* Form group margins */
.mb-3 {
    margin-bottom: 1rem;
}

/* Label styling */
.form-label {
    font-weight: bold;
    margin-bottom: 0.5rem;
    display: block;
    font-size: 1rem;
}

/* Input and Textarea styling */
.form-control {
    width: 100%;
    padding: 10px;
    font-size: 1rem;
    border: 1px solid #ccc;
    border-radius: 4px;
    transition: border-color 0.3s;
}

/* Input focus styling */
.form-control:focus {
    border-color: #007bff;
    outline: none;
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

/* Helper text styling */
.form-text {
    font-size: 0.875rem;
    color: #6c757d;
}

/* Checkbox styling */
.form-check-input {
    width: 1.25rem;
    height: 1.25rem;
    margin-top: 0.25rem;
    margin-right: 0.5rem;
    cursor: pointer;
}

.form-check-label {
    font-size: 1rem;
}

/* Button styling */
.btn-primary {
    display: inline-block;
    font-weight: 400;
    color: #fff;
    text-align: center;
    vertical-align: middle;
    cursor: pointer;
    background-color: #007bff;
    border: 1px solid #007bff;
    padding: 0.5rem 1rem;
    font-size: 1rem;
    border-radius: 4px;
    transition: background-color 0.3s, border-color 0.3s;
}

.btn-primary:hover {
    background-color: #0056b3;
    border-color: #004085;
}
.btn {
    text-align: center; /* Align buttons to the center */
}

.btn button {
    margin: 0 10px; /* Add space between buttons */
}

.phara{
    text-align: center;
    font-family: 'Times New Roman', Times, serif;
    font-size: 40px;

}
.form-label-message{

    font-weight: bold;
    margin-bottom: 0.5rem;
    display: block;
    font-size: 1.2rem;
    line-height: 2;
    padding: 10px 0;
}

</style>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>contact us </title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <section class="text-gray-600 body-font relative" >
        <div class="container px-3 py-10 mx-auto" style="max-width: 900px;">
          <div class="flex flex-col text-center w-full mb-12">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Contact Us</h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Have questions or need assistance? Reach out to us and we'll get back to you as soon as possible</p>
          </div>
          <div class="lg:w-1/2 md:w-2/3 mx-auto">
            <div class="flex flex-wrap -m-2">
               <div class="p-2 w-full sm:w-1/2">
                <div class="relative">
                  <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                  <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
              </div>
              <div class="p-2 w-1/2">
                <div class="relative">
                  <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                  <input type="email" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
              </div>
              <div class="p-2 w-full">
                <div class="relative">
                  <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                  <textarea id="message" name="message" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                </div>
              </div>
              <div class="p-2 w-1/2 flex center space-x-4">

                <button class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg" align='center'>Submit</button>
                <a href="/user-dashboard"><button class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Cancel</button></a>
            </div>

            </div>
          </div>
        </div>
      </section>
</body>
</html>
