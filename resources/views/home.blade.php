<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{mix("css/style.css")}}">
    <title>Portfolio-website</title>
</head>
<body>
    <header>
        <h1>Portfolio Joey Huijben</h1>
    </header>

    <div class="separator">
        <h2>Introductie</h2>
    </div>

    <div class="container">
        <div class="textAboutMe">
            <h4>Hier komt tekst over mezelf</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <p>Accusantium aliquid aperiam aspernatur eius exercitationem harum minus molestiae nulla temporibus totam!</p>
            <p>Amet commodi hic officia quisquam! Eum officia quo reprehenderit voluptatem.</p>
        </div>
        <div class="imageOfMe">
            <img src="{{ asset('assets/Mario.jpg') }}" alt="Foto van mezelf">
        </div>
    </div>

    <div class="separator">
        <h2>Projecten</h2>
    </div>

    <div class="container2">
        <div class="projects">
            <button>Filterknop</button>
            <h4>Hier komt de projectnaam</h4>
            <p>Lorem ipsum dolor sit amet</p>
            <h4>Hier komt een afbeelding</h4>
            <img src="{{ asset('assets/Mario.jpg') }}" alt="test">
            <h4>Hier komt de beschrijving van het project</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut commodi cumque dignissimos, dolore laudantium maiores nihil, non obcaecati quo repudiandae velit, veniam voluptates voluptatibus. Aliquid necessitatibus provident quae sunt tenetur?</p>
        </div>
    </div>

</body>
<footer>
    <div class="links">
        <p>Hier komen de links naar social media</p>
    </div>
</footer>
</html>
