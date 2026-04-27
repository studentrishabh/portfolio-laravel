<!DOCTYPE html>
<html>
<head>
    <title>Portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<nav>
    <a href="/">Home</a>
    <a href="#projects">Projects</a>
    <a href="#contact">Contact</a>
</nav>
<header>
    <h1>Rishabh Chaurasiya</h1>
    <p>API Developer</p>
</header>

@yield('content')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>

<script>
@if(session('success'))
    Swal.fire({
        title: 'Success!',
        text: '{{ session('success') }}',
        icon: 'success',
        confirmButtonText: 'OK'
    });
@endif

@if(session('error'))
    Swal.fire({
        title: 'Error!',
        text: '{{ session('error') }}',
        icon: 'error',
        confirmButtonText: 'Try Again'
    });
@endif
</script>