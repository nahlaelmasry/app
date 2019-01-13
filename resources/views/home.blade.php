@extends('layouts.app')

@section('content')

<style>
body {
    margin: 0;
    font-family:  sans-serif;
}

.hero {
    /* Sizing */
    width: 100vw;
    height: 100vh;

    /* Flexbox stuff */
    display: flex;
    justify-content: center;
    align-items: center;

    /* Text styles */
    text-align: center;
    color: white; /* ADD THIS LINE */

    /* Background styles */
    background-image:url("/img/d1.jpg");
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
}

.hero h1 {
    /* Text styles */
    font-size: 5em;

    /* Margins */
    margin-top: 0;
    margin-bottom: 0.5em;
}

.hero .btn {
    /* Positioning and sizing */
    display: block;
    width: 200px;

    /* Padding and margins */
    padding: 1em;
    margin-top: 50px;
    margin-left: auto;
    margin-right: auto;

    /* Text styles */
    color: white; /* CHANGE THIS LINE */
    text-decoration: none;
    font-size: 1.5em;

    /* Border styles */
    border: 3px solid white; /* CHANGE THIS LINE */
    border-radius: 20px;
}
</style>
<body>
<section class="hero">
        <div class="hero-inner">
            <h1>The Rookery</h1>
            <h2> Title Of Luxury</h2>
            <a href="/book" class="btn">Book Now..</a>
        </div>
    </section>
    


@endsection