<!-- resources/views/pages/contact.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <!-- Include your CSS files here -->
    <style>
       body {
        font-family: Arial, sans-serif;
    background-color: #f8f9fa;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    width: 80%;
    max-width: 800px;
    padding: 1rem;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    box-sizing: border-box;
}

h2 {
    text-align: center;
    color: #333;
}

.form-group {
    margin-bottom: 1rem;
}

.form-group label {
    display: block;
    margin-bottom: .5rem;
    font-weight: bold;
}

.form-control {
    width: 100%;
    padding: .5rem;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    box-sizing: border-box;
}
.button-container {
    display: flex;
    justify-content: center; /* Center buttons horizontally */
    gap: 0px; /* Space between buttons */
    margin-top: 1rem; /* Space above buttons */
    margin-right: 20px;
}

.btn {
    display: inline-block;
    font-size: 18px;
    font-weight: 400;
    text-align: center;
    vertical-align: middle;
    cursor: pointer;
    border: 1px solid transparent;
    border-radius: .25rem;
    padding: .5rem 1rem;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    align-items: center;
    margin-left: 340px;
}

.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
}

.alert {
    padding: .75rem 1.25rem;
    margin-bottom: 1rem;
    border: 1px solid transparent;
    border-radius: .25rem;
}

.alert-danger {
    color: #721c24;
    background-color: #f8d7da;
    border-color: #f5c6cb;
}

.alert-success {
    color: #155724;
    background-color: #d4edda;
    border-color: #c3e6cb;
}

    </style>
</head>
<body>
    <div class="container">
        <h2>Contact Us</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="/contact" method="POST">
            @csrf
            <div class="form-group">

                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Type Here" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Type Here" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" name="message" placeholder="Type Here" rows="5" required></textarea>
            </div>

            
                <button type="submit" class="btn btn-primary">Submit</button>

            </div>
        </form>
    </div>
</body>
</html>
